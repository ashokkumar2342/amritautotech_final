<?php

namespace App\Http\Controllers\Admin;

use App\StudentDetails;
use App\ClassType;
use App\SessionDate;
use App\Center;
use App\HolidayHomework;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;


class HolidayHomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $holidayhomeworks =  HolidayHomework::orderBy('created_at','desc')->get();
        
        return view('admin.holidayhomework.list',compact('classes','sessions','sections','centers','holidayhomeworks'));
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
                          
            'holidayhomework' => 'required|mimes:pdf,docx|between:0,2048',
            'title' => 'required|max:255',
        ]);

         $file = $request->file('holidayhomework');
         $file->store('public/file');
        $holidayhomework= new HolidayHomeWork();        
        $holidayhomework->holiday_homework = $file->hashName();
        $holidayhomework->title= $request->title;
        if($holidayhomework->save()){   
            return redirect()->route('admin.holidayhomework.list',$holidayhomework->id)->with(['class'=>'success','message'=>' file Upload success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function show(HolidayHomework $holidayHomework)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function edit(HolidayHomework $holidayHomework)
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
    public function update(Request $request, HolidayHomework $holidayHomework)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HolidayHomework  $holidayHomework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, HolidayHomework $holidayHomework)
    {
        if ($holidayHomework->delete()) {
        return redirect()->back()->with(['class'=>'success','message'=>' file Deleted success ...']);
             
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
       

        
        
    }
}
