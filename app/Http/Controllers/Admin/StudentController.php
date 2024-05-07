<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use App\StudentFee;
use App\ClassType;
use App\PaymentType;
use App\SessionDate;
use App\DiscountType;
use App\TransportRoute;
use App\Center;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::all();
        return view('admin.student.studentdetails.list',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centers = Center::where('status',1)->get();
        $paymenttypes = array_pluck(PaymentType::get(['id','name'])->toArray(),'name', 'id');
        $classes = array_pluck(ClassType::get(['id','alias'])->toArray(),'alias', 'id');
        $discounts = array_pluck(DiscountType::get(['id','name'])->toArray(),'name', 'id');
        $sessions = array_pluck(SessionDate::get(['id','date'])->toArray(),'date', 'id');
        $routes = array_pluck(TransportRoute::get(['id','name'])->toArray(),'name', 'id');
        return view('admin.student.studentdetails.add',compact('classes','routes','sessions','centers','paymenttypes','discounts'));
    }
    public function payFee(Request $request){
        $this->validate($request,[
            'total_fees' => 'required|numeric',
            'discount_type_id' => 'required|numeric',
            'installment_fees'=> 'required|numeric',
            'discount' => 'required|numeric',
            'discount_name' => 'required|max:199',
            'receipt_no' => 'required|max:199',
            "receipt_date" => 'required|date',
            "amount_payable" => 'required|numeric',
            "cheque_no" => 'nullable|numeric',
            "other_fee" => 'nullable|numeric',
            "bank_name" => 'nullable|max:199',
            "cheque_date" => 'nullable|date',      
        ]);
        $studentFee = new StudentFee();
        $studentFee->student_id = $request->student_id;
        $studentFee->total_fees = $request->total_fees;
        $studentFee->other_fee = $request->other_fee;
        $studentFee->discount_type_id = $request->discount_type_id;
        $studentFee->discount_name = $request->discount_name;
        $studentFee->discount = $request->discount;
        $studentFee->receipt_no = $request->receipt_no;
        $studentFee->receipt_date = $request->receipt_date;
        $studentFee->amount_payable = $request->amount_payable;
        $studentFee->cheque_no = $request->cheque_no;
        $studentFee->bank_name = $request->bank_name;
        $studentFee->cheque_date = $request->cheque_date;
        $studentFee->received_fee = $request->amount_payable;
        $studentFee->installment_fees = $request->installment_fees;
        if($studentFee->save()){ 
            return redirect()->back()->with(['class'=>'success','message'=>'student fee pay success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);

    }
    public function studentFeeEdit(Request $request, StudentFee $studentFee){
        return view('admin.student.fee.edit',compact('studentFee'));
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
            "date_of_admission" => 'required|date',
            "student_name" => 'required|max:199',
            "father_name" => 'required|max:199',
            "mother_name" => 'required|max:199',
            "date_of_birth" => 'required|max:199',
            "religion" => "required|max:199",
            "category" => "required|max:199",
            "address" => 'required|max:1000',
            "state" => "required|max:199",
            "city" => "required|max:199",
            "pincode" => 'required|numeric',
            "mobile_one" => 'nullable|numeric',
            "mobile_two" => 'nullable|numeric',
            "mobile_sms" => 'required|numeric',
            'total_fee' => 'required|numeric',
            'payment_type' => 'required|numeric'
      
        ]);
        
        
        $username = str_random('6');
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $password = bcrypt(substr( str_shuffle( $chars ), 0, 6 ));
        $student= new Student();
        $student->username= $username;
        $student->password= $password;
        $student->center_id= $request->center;
        $student->session_id= $request->session;
        $student->class_id= $request->class;
        $student->section_id= $request->section;
        $student->totalFee= $request->total_fee;
        $student->date_of_admission= date('Y-m-d',strtotime($request->date_of_admission));
        $student->name= $request->student_name;
        $student->father_name= $request->father_name;
        $student->mother_name= $request->mother_name;
        $student->dob= date('Y-m-d',strtotime($request->date_of_birth));
        $student->religion= $request->religion;
        $student->category= $request->category;
        $student->address= $request->address;
        $student->state= $request->state;
        $student->city= $request->city;
        $student->pincode= $request->pincode;
        $student->pincode= $request->total_fee;
        $student->mobile_one= $request->mobile_one;
        $student->mobile_two= $request->mobile_two;
        $student->mobile_sms= $request->mobile_sms;
        $student->discount_type_id= $request->discount_type;
        $student->payment_type_id= $request->payment_type;
        $student->transport_id = $request->driver_id;
        if($student->save()){            
            $student->username= 'zgs'.$student->id;
            $student->save();
            return redirect()->route('admin.student.view',$student->id)->with(['class'=>'success','message'=>'student registration success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentDetails  $studentDetails
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.student.studentdetails.view',compact('student'));
    }
    public function image($image){
        $img = Storage::disk('student')->get('profile/'.$image);
        return response($img);
    }
    public function imageUpdate(Request $request, Student $student){
          $this->validate($request,[
      
            'student_photo' => 'required|image|mimes:jpeg,bmp,png,gif|between:2,1024',
           
        ]);
        $file = $request->file('student_photo');
        $file->store('student/profile');
        $student->picture = $file->hashName();
        if($student->save()){   
            return redirect()->route('admin.student.view',$student->id)->with(['class'=>'success','message'=>'student registration success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentDetails  $studentDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $centers = Center::where('status',1)->get();
        $paymenttypes = array_pluck(PaymentType::get(['id','name'])->toArray(),'name', 'id');
        $classes = array_pluck(ClassType::get(['id','alias'])->toArray(),'alias', 'id');
        $discounts = array_pluck(DiscountType::get(['id','name'])->toArray(),'name', 'id');
        $sessions = array_pluck(SessionDate::get(['id','date'])->toArray(),'date', 'id');
        $routes = array_pluck(TransportRoute::get(['id','name'])->toArray(),'name', 'id');
        return view('admin.student.studentdetails.edit',compact('student','classes','sessions','centers','paymenttypes','discounts','routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentDetails  $studentDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $studentDetails)
    {
        $this->validate($request,[
            'center' => 'required|numeric',
            'session' => 'required|numeric',
            'class' => 'required|numeric',
            "section" => 'required|numeric',
            "date_of_admission" => 'required|date',
            "student_name" => 'required|max:199',
            "father_name" => 'required|max:199',
            "mother_name" => 'required|max:199',
            "date_of_birth" => 'required|max:199',
            "religion" => "required|max:199",
            "category" => "required|max:199",
            "address" => 'required|max:1000',
            "state" => "required|max:199",
            "city" => "required|max:199",
            "pincode" => 'required|numeric',
            "mobile_one" => 'nullable|numeric',
            "mobile_two" => 'nullable|numeric',
            "mobile_sms" => 'required|numeric',
            'total_fee' => 'required|numeric',
            'payment_type' => 'required|numeric'
      
        ]);
        
        
        $student->center_id= $request->center;
        $student->session_id= $request->session;
        $student->class_id= $request->class;
        $student->section_id= $request->section;
        $student->totalFee= $request->total_fee;
        $student->date_of_admission= date('Y-m-d',strtotime($request->date_of_admission));
        $student->name= $request->student_name;
        $student->father_name= $request->father_name;
        $student->mother_name= $request->mother_name;
        $student->dob= date('Y-m-d',strtotime($request->date_of_birth));
        $student->religion= $request->religion;
        $student->category= $request->category;
        $student->address= $request->address;
        $student->state= $request->state;
        $student->city= $request->city;
        $student->pincode= $request->pincode;
        $student->pincode= $request->total_fee;
        $student->mobile_one= $request->mobile_one;
        $student->mobile_two= $request->mobile_two;
        $student->mobile_sms= $request->mobile_sms;
        $student->discount_type_id= $request->discount_type;
        $student->payment_type_id= $request->payment_type;
        $student->transport_id = $request->driver_id;
        if($student->save()){            
            $student->username= 'zgs'.$student->id;
            $student->save();
            return redirect()->route('admin.student.view',$student->id)->with(['class'=>'success','message'=>'student registration success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
        
    }
    public function studentFeeUpdate(Request $request, StudentFee $studentFee){
        $this->validate($request,[
            'total_fees' => 'required|numeric',
            'discount_type_id' => 'required|numeric',
            'installment_fees'=> 'required|numeric',
            'discount' => 'required|numeric',
            'discount_name' => 'required|max:199',
            'receipt_no' => 'required|max:199',
            "receipt_date" => 'required|date',
            "amount_payable" => 'required|numeric',
            "cheque_no" => 'nullable|numeric',
            "bank_name" => 'nullable|max:199',
            "cheque_date" => 'nullable|date',      
        ]);
        $studentFee->total_fees = $request->total_fees;
        $studentFee->other_fee = $request->other_fee;
        $studentFee->discount_type_id = $request->discount_type_id;
        $studentFee->discount_name = $request->discount_name;
        $studentFee->discount = $request->discount;
        $studentFee->receipt_no = $request->receipt_no;
        $studentFee->receipt_date = $request->receipt_date;
        $studentFee->amount_payable = $request->amount_payable;
        $studentFee->cheque_no = $request->cheque_no;
        $studentFee->bank_name = $request->bank_name;
        $studentFee->cheque_date = $request->cheque_date;
        $studentFee->received_fee = $request->amount_payable;
        $studentFee->installment_fees = $request->installment_fees;
        if($studentFee->save()){ 
            return redirect()->route('admin.student.view',$studentFee->student_id)->with(['class'=>'success','message'=>'student fee pay success ...']);
        }
        return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentDetails  $studentDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $studentDetails)
    {
        //
    }
    public function feereceipt(Student $student)
    {
        return view('admin.student.studentdetails.feeReceipt',compact('student'));
    }
}