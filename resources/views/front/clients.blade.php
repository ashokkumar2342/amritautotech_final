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
           
            <div class="row">
              <div class="col-md-8">
                
              <img src="{{ asset('assets/images/clients.jpg') }}" alt="">
              </div>
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
            </div>
        <!--Sidebar-->
            
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

