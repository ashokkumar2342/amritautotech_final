<?php

namespace App\Http\Controllers\Student;
use App\StudentDetails;
use App\ClassType;
use App\SessionDate;
use App\Center;
use App\HomeWork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $homeworks = HomeWork::orderBy('id','desc')->paginate(10); 
        return view('student.homework.list',compact('homeworks'));
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
  
        return response()->json($homework);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeworkController  $homeworkController
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
          
        return view('student.homework.view',compact('homework'));
        
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
