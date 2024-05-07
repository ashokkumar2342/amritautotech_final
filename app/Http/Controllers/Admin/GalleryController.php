<?php

namespace App\Http\Controllers\Admin;


use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gallaries =  Gallery::orderBy('created_at','desc')->paginate(10);
                                    
        
        return view('admin.gallery.list',compact('gallaries'));
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
         $this->validate($request,[
                          
            'image' => 'required|mimes:jpg,png|between:10,1024',
             
        ]);

         $file = $request->file('image');
         $file->store('public/gallery');
        $galleries= new Gallery();
        $galleries->image = $file->hashName();
        $galleries->title= $request->title;
        if($galleries->save()){   
            return redirect()->route('admin.gallery.list',$galleries->id)->with(['class'=>'success','message'=>' file Upload success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
       // $holidayhomeworks =  HolidayHomework::all();
       //  $centers = Center::where('status',1)->get();
       //  $sessions = array_pluck(SessionDate::get(['id','date'])->toArray(),'date', 'id');
       //  return view('admin.holidayhomework.list',compact('classes','sessions','sections','centers','holidayhomeworks','holidayHomework'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Gallery $gallery)
    {
        if ($gallery->delete()) {
        return redirect()->back()->with(['class'=>'success','message'=>' file Deleted success ...']);
             
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
       

        
        
    }
}
