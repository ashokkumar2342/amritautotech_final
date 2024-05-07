@extends('student.layout.base')
@section('body')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('student.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
 	<!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">           
            @php
                  $totalDepFee = 0;
                 foreach ($student->studentFee as $studentFe):
                   $totalDepFee += $studentFe->discount+$studentFe->received_fee;
                 endforeach
                 @endphp
                      <h3>  <b>{{$student->classFee->total_fee-$totalDepFee }}</b></h3>   
              

              <p>Total Balance</p>
            </div>
            <div class="icon">
            <i class="fa fa-inr" aria-hidden="true"></i>
              
            </div>
            <a href="{{ route('student.feedetails.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              @php
              $totalFee=0;
            @endphp
            @foreach($student->studentFee as $studentFee)
            @php
              $totalFee+=$studentFee->received_fee+$studentFee->discount;
            @endphp
            @endforeach

          
            <h3>{{ $studentFee->received_fee }}</h3>


              <p>Paid Fees</p>
            </div>
            <div class="icon">
              <i class="fa fa-inr" aria-hidden="true"></i>
            </div>
            <a href="{{ route('student.feedetails.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44 </h3>
              <p>Present</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Absent</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>
    <!-- /.content -->
@endsection