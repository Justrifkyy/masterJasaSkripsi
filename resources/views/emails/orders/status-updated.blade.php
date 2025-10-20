<!DOCTYPE html>
<html>
<head>
    <title>Update Status Pesanan</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

    <p>Halo, <strong>{{ $order->user->name }}</strong>!</p>

    <p>Ini adalah konfirmasi bahwa status pesanan Anda (ID: <strong>#{{ $order->id }}</strong>) telah diperbarui.</p>

    <p>
        <strong>Layanan:</strong> {{ $order->service->judul ?? 'Layanan Dihapus' }} <br>
        <strong>Harga:</strong> Rp {{ number_format($order->harga_pesanan, 0, ',', '.') }}
    </p>

    <h2 style="margin-top: 20px;">Status Baru: {{ ucfirst($order->status) }}</h2>

    @if($order->status == 'diproses')
        <p>Pesanan Anda telah kami konfirmasi dan saat ini sedang dalam proses pengerjaan oleh tim kami.</p>
    @elseif($order->status == 'selesai')
        <p>Kabar baik! Pesanan Anda telah selesai dikerjakan. Silakan hubungi admin di WhatsApp untuk langkah selanjutnya.</p>
    @elseif($order->status == 'batal')
        <p>Pesanan Anda telah dibatalkan.</p>
    @endif

    <p style="margin-top: 30px;">
        Anda dapat melihat riwayat lengkap pesanan Anda kapan saja dengan login ke akun Anda dan mengunjungi halaman "Profile".
    </p>

    <p>
        Terima kasih,<br>
        Tim {{ config('app.name') }}
    </p>

</body>
</html>