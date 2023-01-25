<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Spv_Mail extends Mailable
{
    use Queueable, SerializesModels;
    public $spv;
    public $data_karyawan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($spv,$data_karyawan)
    {
        $this->spv = $spv;
        $this->data_karyawan = $data_karyawan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin/template/email_spv')
        ->from('mrizkysaputra.xmia1@gmail.com');
    }
}
