@extends('admin.layout.base')
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <h3> {{ $news }} </h3>
              <p>News &amp; Event</p>
            </div>
            <div class="icon">          
              <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            </div>
            <a href="{{ route('admin.news.list') }}" class="small-box-footer">More info</a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> {{ $assignments }} </h3>
              <p>Assignments</p>
            </div>
            <div class="icon">
              {{-- <i class="ion ion-stats-bars"></i> --}}
              {{-- <i class="fa fa-users"></i> --}}
              <i class="fa fa-sticky-note-o" aria-hidden="true"></i>


            </div>
            <a href="{{ route('admin.holidayhomework.list') }}" class="small-box-footer">More info</a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $enquiries }}</h3>

              <p>Enquiry</p>
            </div>
            <div class="icon">
              {{-- <i class="ion ion-person-add"></i> --}}
              <i class="fa fa-envelope-o" aria-hidden="true"></i>


            </div>
            <a href="{{ route('admin.enquiry.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $contacts }}</h3>

              <p>Contact Us</p>
            </div>
            <div class="icon">
              
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <a href="{{ route('admin.contact.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>
    <!-- /.content -->
@endsection