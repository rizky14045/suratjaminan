<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormJaminanEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $formjaminan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formjaminan)
    {
        $this->formjaminan = $formjaminan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin/template/email_rumah_sakit')
        ->attach(public_path('generate-pdf/'.$this->formjaminan['file_pdf']))
        ->from('mrizkysaputra.xmia1@gmail.com');
    }
}
