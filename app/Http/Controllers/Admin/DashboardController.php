<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // <-- Tambahkan
use App\Models\Order; // <-- Tambahkan
use App\Models\Service; // <-- Tambahkan
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    // app/Http/Controllers/Admin/DashboardController.php
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

        // 5. Data Grafik Pesanan (12 Bulan Terakhir)
        $chartLabels = [];
        $chartData = [];
        $monthsData = [];

        // Inisialisasi data 12 bulan terakhir (dari 11 bulan lalu s.d. bulan ini)
        for ($i = 11; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $monthKey = $month->format('Y-m'); // cth: 2025-10
            $monthLabel = $month->format('M Y'); // cth: Oct 2025

            $chartLabels[] = $monthLabel;
            $monthsData[$monthKey] = 0; // Set default 0
        }

        // Ambil data pesanan dari database
        $ordersData = Order::select(
            DB::raw('COUNT(id) as count'),
            DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month")
        )
            ->where('created_at', '>=', Carbon::now()->subMonths(11)->startOfMonth())
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        // Isi data dari database ke array
        foreach ($ordersData as $order) {
            if (isset($monthsData[$order->month])) {
                $monthsData[$order->month] = $order->count;
            }
        }

        $chartData = array_values($monthsData);


        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalUsers',
            'totalServices',
            'totalOrders',
            'totalRevenue',
            'chartLabels', // Kirim data grafik
            'chartData'    // Kirim data grafik
        ));
    }
}