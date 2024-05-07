@extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')    
  <!--Page Title-->
      <section class="page-title">
        <div class="container">
          <div class="row clearfix">
            <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
              <h1> </h1>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"> 
            </div>
            <div class="overlay"></div>
          </div>
        </div>
      </section>
      <!--Page Title Ends-->
      <!--about style-two start-->
      <section class="about style-two">
        <div class="container">
          <div style="text-align:justify;">            
             
            <h3> Managing Director</h3>
            <div class="row">
              <div class="col-md-8">
                <p style="text-align:justify">
                <img src="{{ asset('assets/images/background/amit.jpg') }}" class="thumbnail" align="right" style="height: 185px; width:145px; margin-left: 10px;" alt="Managing Director kusum ">
             Amit Kumar is AAE's Managing Director. He started working in Automation & Project Engineer in reputed SPM machines manufacturing Company in 2007.
In last-2014 he resigned from his duties as Head of Department Electrical & Automation Projects.
   </p>
              <p>In start-2015, he created Amrit Autotech Engineers. He has long time experience in Machine manufacturing & Automation Solutions.
In the past, Amit Kumar completed 90 major projects in his technical career.
Projects details:-
</p>
<ol>
  <li><p align="justify">Semi-Automatic line for HVAC assembly; this line has total 10     working station. In this project High end Automation was done him like as Software Development , Communication with OMRON RFID on Ethernet , 2 Barcode scanners on RS232,Printer on Ethernet communication , Elipse SCADA on Ethernet Communication ,CC-Link Communication , FakudaLeakTester, Hot Punch marking machine, Actuator Panel Communication on Ethernet , 10 HMI on Ethernet communication ,16 Analog channel on AD card Programing,6 Servo control.  </p></li>
  <li><p align="justify">Fully Automatic line for Drum Brake Assembly; this line has total 19     working station .He has successfully done all the project wiring section, Software Development , Barcode scanners on RS232,Printer on RS232 communication , Elipse SCADA on RS232 Communication  , 6 Servo control.       </p></li>
 

</ol>
<p align="justify"><b>Amit held a wide range of managerial positions spanning
From planning, international and domestic trade. He speaks Hindi and English.</b>
</p>
             
              </div>
                <!--Sidebar-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <aside class="sidebar">


                            <!-- Popular Categories -->
                            <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="sidebar-title">
                                    <h3>Quick Links</h3>
                                </div>

                                <ul class="list ">
                                    <li><a href="{{ route('front.about') }}"><span class="icon-left fa fa-chevron-right"></span>About Company</a>
                                    </li>
                               <li><a href="{{ route('front.our.journey') }}"><span class="icon-left fa fa-chevron-right"></span>Our Journey</a>
                                           </li>
                                    <li><a href="{{ route('front.managing-director') }}"><span class="icon-left fa fa-chevron-right"></span>Managing Director</a>
                                    </li>
                                    
                                    <li><a href="{{ route('front.executive-director') }}"><span class="icon-left fa fa-chevron-right"></span>Executive Director </a>
                                    </li>
                                    
                                    
                                </ul>

                            </div>



                          

                          
                            <!-- End of .sidebar_tags -->


                        </aside>
                    </div>
                    <!--Sidebar-->
            </div>
            
           </div> 
        </div>
      </section>
@endsection
@push('scripts')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

