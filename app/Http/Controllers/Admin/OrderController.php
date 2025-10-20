<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User; 
use App\Models\Service;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderStatusUpdated;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data order, tapi juga ambil data 'user' dan 'service'
        // yang terhubung (relasi)
        $orders = Order::with(['user', 'service'])
            ->latest()
            ->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua user yang 'aktif' dan BUKAN admin
        $users = User::where('role', 'user')->where('is_active', true)->get();

        // Ambil semua service
        $services = Service::all();

        return view('admin.orders.create', compact('users', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            // Pastikan user_id yang dikirim ada di tabel users
            'user_id' => 'required|exists:users,id',
            // Pastikan service_id yang dikirim ada di tabel services
            'service_id' => 'required|exists:services,id',
            'harga_pesanan' => 'required|numeric|min:0',
            // Pastikan status hanya salah satu dari opsi berikut
            'status' => ['required', Rule::in(['pending', 'diproses', 'selesai', 'batal','wa_pending'])],
        ]);

        // 2. Simpan ke Database
        Order::create($validated);

        // 3. Redirect kembali ke halaman index
        return redirect()->route('admin.orders.index')
            ->with('success', 'Pesanan baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        // Load relasi user dan service
        $order->load(['user', 'service']);

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        // Ambil semua user yang 'aktif' dan BUKAN admin
        $users = User::where('role', 'user')->where('is_active', true)->get();

        // Ambil semua service
        $services = Service::all();

        // Kirim data order, users, dan services ke view
        return view('admin.orders.edit', compact('order', 'users', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        // 1. Validasi
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'harga_pesanan' => 'required|numeric|min:0',
            'status' => ['required', Rule::in(['pending', 'diproses', 'selesai', 'batal', 'wa_pending'])],
        ]);

        // 2. Ambil status asli
        $statusAsli = $order->status;

        // 3. Update data
        $order->update($validated);

        // 4. Cek apakah statusnya berubah DAN status baru BUKAN 'wa_pending'
        if ($statusAsli !== $validated['status'] && $validated['status'] !== 'wa_pending') {

            // ======== GANTI TODO DENGAN INI ========

            // Muat relasi user & service (agar ada di $order)
            $order->load(['user', 'service']);

            // Kirim email ke user
            try {
                Mail::to($order->user->email)->send(new OrderStatusUpdated($order));
            } catch (\Exception $e) {
                // Jika email gagal, jangan hentikan proses
                // Cukup catat di log
                Log::error('Gagal mengirim email update status: ' . $e->getMessage());
            }

            // ======================================
        }

        // 5. Redirect
        return redirect()->route('admin.orders.index')
            ->with('success', 'Pesanan berhasil diperbarui.');
    }
}
