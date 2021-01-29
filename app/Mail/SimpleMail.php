<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SimpleMail extends Mailable
{
    use Queueable, SerializesModels;
    public $result;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $result)
    {
        $this->name = $name;
        $this->result = $result;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $result = $this->result;
        $name = $this->name;
        return $this->subject('Subject Name')
            ->view('mail.template1')
            ->with([
                'result'=>$result,
                'name'=>$name
            ]);
    }

    public function failed()
    {
        // Called when the job is failing...
        Log::alert('error in queue mail');
    }
}
