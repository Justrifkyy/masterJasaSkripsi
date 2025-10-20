<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service; // <-- Impor
use App\Models\Testimonial; // <-- Impor
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan Halaman Homepage.
     */
    public function home()
    {
        // 1. Ambil Layanan Favorit (maksimal 4, sesuai dokumen)
        $favoriteServices = Service::where('is_favorite', true)
            ->take(4)
            ->get();

        // 2. Ambil semua testimoni (atau batasi, misal 6 terbaru)
        $testimonials = Testimonial::latest()->take(6)->get();

        // 3. Kirim data ke view 'home'
        return view('home', compact('favoriteServices', 'testimonials'));
    }

    public function listServices()
    {
        // Ambil semua layanan, paginasi
        $services = Service::latest()->paginate(9);
        return view('frontend.services-list', compact('services'));
    }

    public function showService(Service $service)
    {
        // $service otomatis didapat dari URL
        return view('frontend.services-show', compact('service'));
    }

    public function about()
    {
        // Ambil semua testimoni untuk ditampilkan di halaman about
        $testimonials = Testimonial::latest()->get();
        return view('frontend.about', compact('testimonials'));
    }

    public function howToOrder()
    {
        // Ini hanya halaman statis
        return view('frontend.how-to-order');
    }
}