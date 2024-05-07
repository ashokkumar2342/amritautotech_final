<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
 

class ContMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;
    public function __construct()
    {
        //
         
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   public function build(request $request)
    {
        // return $this->markdown('assets/mail/Enquiry')->subject('enquiry');
        return $this->view('contact',[
            'name'=>$request->name, 
            'mobile'=>$request->mobile,
            'email'=>$request->email,

            'msg'=>$request->message, 
            

            ])->to('tech.aae@gmail.com')->subject('Contact us');

    }
}
