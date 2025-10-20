<?php

namespace App\Mail;

use App\Models\Order; // <-- Impor model Order
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Properti publik ini akan otomatis tersedia di file view email.
     */
    public $order;

    /**
     * Buat instance pesan baru.
     */
    public function __construct(Order $order)
    {
        // Terima data Order saat Mailable dibuat
        $this->order = $order;
    }

    /**
     * Tentukan 'subject' (judul) email.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Update Status Pesanan Anda: #' . $this->order->id,
        );
    }

    /**
     * Tentukan 'view' (template) email.
     */
    public function content(): Content
    {
        // Nama view ini dibuat otomatis oleh artisan,
        // tapi kita ubah sedikit agar lebih rapi.
        return new Content(
            view: 'emails.orders.status-updated',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
