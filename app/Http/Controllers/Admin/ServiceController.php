<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Hanya tampilkan view
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required|string',
            'is_favorite' => 'nullable|boolean', //
        ]);

        // 2. Menyesuaikan nilai checkbox 'is_favorite'
        // Jika checkbox tidak dicentang, nilainya tidak akan terkirim (null).
        // Kita set manual jadi 'false' (atau 0) jika null.
        $validated['is_favorite'] = $request->has('is_favorite');

        // 3. Simpan ke Database
        Service::create($validated);

        // 4. Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        // Sama seperti edit, kita gunakan Route Model Binding
        // untuk mengambil data service
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // Laravel otomatis mencari Service berdasarkan ID
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required|string',
            'is_favorite' => 'nullable|boolean',
        ]);

        // 2. Menyesuaikan nilai checkbox
        $validated['is_favorite'] = $request->has('is_favorite');

        // 3. Update data di Database
        $service->update($validated);

        // 4. Redirect kembali ke halaman index
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // 1. Hapus data
        $service->delete();

        // 2. Redirect kembali ke HALAMAN INDEX
        // Ini adalah bagian yang penting:
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil dihapus.');
    }
}
