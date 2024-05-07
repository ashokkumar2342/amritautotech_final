<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
 
use App\HolidayHomework;
use App\News;

class HomeController extends Controller
{
    public function index()
    {
         // $news = News::orderBy('id','desc')->get();
         // $assignments = HolidayHomework::orderBy('id','desc')->get();


        return view('front.index');
       
    }

    public function about()
    {
        return view('front.about');
    }

    public function profile()
    {
        return view('front.company-profile');
    }
    public function journey()
    {
        return view('front.journey');
    }

    public function managing()
    {
        return view('front.managing-derector');
    }
    public function executive()
    {
        
        return view('front.executive-director');
    }
     public function electrical()
    {
        
        return view('front.electrical');
    } 
     public function software()
    {
        
        return view('front.software');
    } 
     public function spm()
    {
        
        return view('front.spm');
    } 
     
     public function services()
    {
        
        return view('front.services');
    } 
    public function clients()
    {
        
        return view('front.clients');
    } 


    
    
    
     public function gallery()
    {
     $galleries = Gallery::orderBy('id','desc')->paginate(8);       
        
        return view('front.gallery',compact('galleries'));
         
    }
      public function other()
    {
        return view('front.other-evets');
    }
    
}    
