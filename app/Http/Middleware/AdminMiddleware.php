<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // <-- Tambahkan 


function handle(Request $request, Closure $next): Response
{
    // Cek apakah user sudah login DAN rolenya adalah 'admin'
    if (Auth::check() && Auth::user()->role === 'admin') {
        return $next($request);
    }

    // Jika bukan admin, tendang ke halaman utama
    return redirect('/');
}
