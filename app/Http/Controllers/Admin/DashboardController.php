<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // <-- Tambahkan
use App\Models\Order; // <-- Tambahkan
use App\Models\Service; // <-- Tambahkan

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Total User (hanya yang rolenya 'user')
        $totalUsers = User::where('role', 'user')->count();

        // 2. Total Layanan
        $totalServices = Service::count();

        // 3. Total Pesanan
        $totalOrders = Order::count();

        // 4. Estimasi Pendapatan (hanya dari pesanan 'selesai')
        $totalRevenue = Order::where('status', 'selesai')->sum('harga_pesanan');

        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalUsers',
            'totalServices',
            'totalOrders',
            'totalRevenue'
        ));
    }
}