<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Request;
use Illuminate\Support\Facades\Input;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data=$this->data;
        return $this->view('users.SendEmail', compact('data'))
            ->subject('Portfolio reaction')
            ->from(Request::get('Email'));
    }
}

      /*  return $this->view('users.SendEmail',['Yourmessage'=>$request->message])->to($request->Email);/*

    }
}
