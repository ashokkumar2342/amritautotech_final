<?php

namespace App\Http\Controllers\Admin;
use App\StudentDetails;
use App\ClassType;
use App\SessionDate;
use App\Center;
use App\HomeWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks =  HomeWork::all();
        $centers = Center::where('status',1)->get();
        $sessions = array_pluck(SessionDate::get(['id','date'])->toArray(),'date', 'id');
        return view('admin.homework.list',compact('classes','sessions','sections','centers','homeworks'));


         
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
            'center' => 'required|numeric',
            'session' => 'required|numeric',
            'class' => 'required|numeric',
            "section" => 'required|numeric',
            "homework" => 'required',
         
        ]);
        $homework= new HomeWork();
        
        $homework->center_id= $request->center;
        $homework->session_id= $request->session;
        $homework->class_id= $request->class;
        $homework->section_id= $request->section;       
        $homework->homework= $request->homework;
         
        if($homework->save()){    
            return redirect()->route('admin.homework.list')->with(['class'=>'success','message'=>'homework Add  successfully ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeworkController  $homeworkController
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // return $request->all();
       $homework = Homework::whereDate('created_at',date('Y-m-d'))->where(['session_id'=>$request->session,'class_id'=>$request->class,'section_id'=>$request->section])->first();
                    
        return response()->json($homework);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeworkController  $homeworkController
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        $homeworks =  HomeWork::all();
        $centers = Center::where('status',1)->get();
        $sessions = array_pluck(SessionDate::get(['id','date'])->toArray(),'date', 'id');
        return view('admin.homework.list',compact('classes','sessions','sections','centers','homeworks','homework'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeworkController  $homeworkController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homework $homework)
    {
        $this->validate($request,[
            'center' => 'required|numeric',
            'session' => 'required|numeric',
            'class' => 'required|numeric',
            "section" => 'required|numeric',
            "homework" => 'required',
         
        ]);        
        $homework->center_id= $request->center;
        $homework->session_id= $request->session;
        $homework->class_id= $request->class;
        $homework->section_id= $request->section;       
        $homework->homework= $request->homework;

        if($homework->save()){    
            return redirect()->route('admin.homework.list')->with(['class'=>'success','message'=>'homework Add  successfully ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeworkController  $homeworkController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        //
    }
}
