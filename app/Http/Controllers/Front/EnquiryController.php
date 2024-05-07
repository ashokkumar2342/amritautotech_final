<?php

namespace App\Http\Controllers\Front;

// use App\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\EnquiryMail;


class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.enquiry');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
        'name' => 'required|max:255',
        'mobile' => 'required',
        'address' => 'max:255',

        'message' => 'max:255',

        ]);

        // $enquiries = $request->all();

        // Mail::send(['text'=>'mail'],['name','sarthak'],function($message){
        //     $message->to('innovusine@gmail.com','To ashok')->subject('test Email');
        //     $message->from('inovusine@gmail.com','ashok');
        // });
      
        
         // $enquiries = new Enquiry;

        // $enquiries->name = $request->name;
        
        // $enquiries->email = $request->email;
        
        // $enquiries->mobile = $request->mobile;
        // $enquiries->address = $request->address;

        // $enquiries->message = $request->message;

        // if($enquiries->save()){ 
             // Mail::to('innovusine@gmail.com')->queue(new EnquiryMail());
             Mail::send(new EnquiryMail());

           return redirect()->route('front.enquiry')->with(['message'=>'Send Enquiry Successfully ','class'=>'success']);
        // }
        // return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
