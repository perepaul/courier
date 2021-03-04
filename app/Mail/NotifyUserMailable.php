<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyUserMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $shipment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($shipment)
    {
        $this->shipment = $shipment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('receipt.receipt',['shipment'=>$this->shipment]);
        // dd($pdf);
        // dd($pdf->output());
        return $this->markdown('emails.notify-user')->subject('Parcel Dispatched')
                ->attachData($pdf->output(),'Receipt.pdf',['mime' => 'application/pdf',]);
    }
}
