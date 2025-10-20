<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua user KECUALI admin yang sedang login
        $users = User::where('id', '!=', Auth::id())
            ->latest()
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // (Opsional) Nanti kita bisa tambahkan data riwayat pesanan user di sini
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Kita gunakan Route Model Binding,
        // Laravel otomatis ambil data user berdasarkan ID
        return view('admin.users.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            // Validasi 'role' harus 'admin' atau 'user'
            'role' => ['required', Rule::in(['admin', 'user'])],
            // Validasi 'is_active' harus boolean (true/false atau 1/0)
            'is_active' => 'required|boolean',
        ]);

        // 2. Update data di Database
        $user->update($validated);

        // 3. Redirect kembali ke halaman index
        return redirect()->route('admin.users.index')
            ->with('success', 'Data user berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Cek agar admin tidak bisa menghapus dirinya sendiri (pengaman ganda)
        if ($user->id === Auth::id()) {
            return redirect()->route('admin.users.index')
                ->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
