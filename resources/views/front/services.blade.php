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
             
            <h3> Services</h3>
            <div class="row">
              <div class="col-md-8">
                <p style="text-align:justify">                 
                  Here we want to express our heartfelt gratitude to our clients for the trust they have been
                  Placing in Auto mobile Sector, since 2015, over fifteen major companies have been our clients. We have proven our expertise and experience in a number of industries and provided PR consulting on a number of topics. 
                  Service agreements is proof of the positive effect of our activities on our clients’ business.
                  </p>
                  <p align="justify"><b>We have tool room facility for Machine Manufacturing
                  Machines details:-
                  </b></p>
                  <ol>
                    <li><p>lathe machineno. 02</p></li>
                    <li><p>Milling machine   no. 03</p></li>
                    <li><p>Surface Grinder   no. 02</p></li>
                    <li><p>Fix Drill Machine      no. 02</p></li>
                    <li><p>Hand Drill Machine  no.01</p></li>
                    <li><p>Cup Grinder no.01 </p></li>
                    <li><p>Bed Milling no.02</p></li>

                  </ol>
                  <p align="justify">
                    Production companies usually propose to client’s ways of delivering what is demanded fromthem. AAE, however, provides services at an earlier stage of planning and helps clients searchfor the most effective ways to communicate key messages. Such an approach brings effectiveresults at lower costs.
                  </p>
                  <br>
               <h4>Services & Solution Offered </h4>  
               <img src="{{ asset('assets/images/service/re.jpg')  }}" class="thumbnail" align="right" style="width: 250px; margin-left:10px;  ">
               <ol>

                 <li><p>Automation System Integration with Machine Using Word Class Automation Products.</p></li>
                 <li><p>PLC, HMI, & Scada & Programmin  Development  As per Requirement.</p></li>
                 <li><p>Solution for Scada & Visualization for process industry.</p></li>
                 <li><p>And on Display System for Production line.</p></li>
                 <li><p>Break  down Services & Support for Production line.</p></li>
                 <li><p>Repair of all automation items.</p></li>
                 <li><p>Bar Code Printing & Reading Solution.</p></li>
                 <li><p>Data Traceability Solution.</p></li>
                 <li><p>Plant Energy Saving Solutions.</p></li>
                 <li><p>  Automation Training. </p></li>

               </ol> 
             <h2>InhouseMachineDesigning& Manufacturing </h2>
             <hr>
           
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
               <div class="row">
                 <div class="col-md-3">
                   <img src="{{ asset('assets/images/background/1.jpg') }}" class="thumbnail"  alt="service ">
                 </div>
                 <div class="col-md-3">
                   <img src="{{ asset('assets/images/background/2.jpg') }}" class="thumbnail"  alt="service ">
                 </div>
                 <div class="col-md-3">
                   <img src="{{ asset('assets/images/background/3.jpg') }}" class="thumbnail"  alt="service ">
                 </div>
                 <div class="col-md-3">
                   <img src="{{ asset('assets/images/background/4.jpg') }}" class="thumbnail"  alt="service ">
                 </div>
              </div>

              <div class="row">
              <h2>Control Panels</h2><br>
             
                 <div class="col-md-4">
                   <img src="{{ asset('assets/images/service/plc.jpg') }}" class="thumbnail"  alt="service ">
                   <h3 style="padding-bottom: 10px;">PLC  Panel</h3>
                 </div>
                 <div class="col-md-4">
                   <img src="{{ asset('assets/images/service/cc.jpg') }}" class="thumbnail"  alt="service ">
                    <h3 style="padding-bottom: 10px;"">VFD Panel</h3>
                 </div>
                 <div class="col-md-4">
                   <img src="{{ asset('assets/images/service/dd.jpg') }}" class="thumbnail"  alt="service ">
                    <h3 style="padding-bottom: 10px;"">Servo & Scada Panel</h3>
                 </div>

                 
                 <div class="col-md-4">
                   <img src="{{ asset('assets/images/service/pcm.jpg') }}" class="thumbnail"  alt="service ">
                    <h3 style="padding-bottom: 10px;"">Power Distribution Panel</h3>
                    </div>
                  
                 
                 <div class="col-md-4">
                   <img src="{{ asset('assets/images/service/mcc.jpg') }}" class="thumbnail"  alt="service ">
                    <h3 style="padding-bottom: 10px;"">MCC Panel</h3>
                 </div>

                 <div class="col-md-4">
                   <img src="{{ asset('assets/images/service/custom.jpg') }}" class="thumbnail"  alt="service ">
                    <h3 style="padding-bottom: 10px;"">Custormized Panel</h3>
                 </div>
              </div>
              <div class="row">
              <hr>
                 
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

