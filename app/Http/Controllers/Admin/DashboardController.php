<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enquiry;
use App\Contact;
use App\News;
use App\HolidayHomework;

 
class DashboardController extends Controller
{
    public function index(){
        
       
         $enquiries= Enquiry::All()->count();   
         $contacts= Contact::All()->count(); 
         $news= News::All()->count();          
         $assignments= HolidayHomework::All()->count();          



         return view('admin.dashboard',compact('enquiries','contacts','news','assignments'));       

    }
     

}
