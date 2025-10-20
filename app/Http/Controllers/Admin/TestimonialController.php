<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input (termasuk file)
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi file
        ]);

        // 2. Handle File Upload
        if ($request->hasFile('foto')) {
            // Simpan file di dalam folder 'public/testimonials'
            // 'store' akan meng-generate nama unik
            $path = $request->file('foto')->store('testimonials', 'public');

            // Simpan path file ke data yang divalidasi
            $validated['foto'] = $path;
        }

        // 3. Simpan ke Database
        Testimonial::create($validated);

        // 4. Redirect kembali ke halaman index
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        // Laravel otomatis mencari Testimonial berdasarkan ID
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // 1. Validasi Input (foto sekarang nullable/opsional)
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Boleh kosong
        ]);

        // 2. Handle File Upload (Jika ada file baru)
        if ($request->hasFile('foto')) {
            // Hapus file lama dari storage
            if ($testimonial->foto) {
                Storage::disk('public')->delete($testimonial->foto);
            }

            // Simpan file baru
            $path = $request->file('foto')->store('testimonials', 'public');
            $validated['foto'] = $path;
        }

        // 3. Update data di Database
        // Jika tidak ada file baru, $validated['foto'] tidak akan ter-set,
        // sehingga data 'foto' di database tetap menggunakan yang lama.
        $testimonial->update($validated);

        // 4. Redirect kembali ke halaman index
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // 1. Hapus file foto dari storage
        if ($testimonial->foto) {
            Storage::disk('public')->delete($testimonial->foto);
        }

        // 2. Hapus data dari database
        $testimonial->delete();

        // 3. Redirect kembali ke halaman index
        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil dihapus.');
    }
}
