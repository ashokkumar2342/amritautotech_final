@extends('front.layout.main')
@push('styles')
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
@endpush
@section('body')
   <!--Start rev slider wrapper-->
     <section class="rev_slider_wrapper">
      <div id="slider1" class="rev_slider" data-version="5.0">
          <ul>
              <li data-transition="fade">
                  <img src="{{ asset('assets/images/slider/1.jpg') }}" alt="" width="1500" height="504"    data-bgrepeat="no-repeat">
                  <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="0" data-y="top" data-voffset="230" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                      <div class="slide-content-box"  style="background-color: rgba(128, 109, 109, 0.35);">
                          <h1 style="color:white">Welcome To Amrit Autotech Engineers</h1>
                      </div>
                  </div>
              </li>
               <li data-transition="fade">
                  <img src="{{ asset('assets/images/slider/4.jpg') }}" alt="" width="1500" height="504"    data-bgrepeat="no-repeat">
                  <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="0" data-y="top" data-voffset="230" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                      <div class="slide-content-box"  style="background-color: rgba(128, 109, 109, 0.35);">
                          <h1 style="color:white">SPM Division</h1>
                      </div>
                  </div>
              </li>
                <li data-transition="fade">
                  <img src="{{ asset('assets/images/slider/5.jpg') }}" alt="" width="1500" height="504"    data-bgrepeat="no-repeat">
                  <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="0" data-y="top" data-voffset="230" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                      <div class="slide-content-box" style="background-color: rgba(128, 109, 109, 0.35);">
                          <h1 style="color:white">Electrical Division</h1>
                      </div>
                  </div>
              </li>
              <li data-transition="fade">
                  <img src="{{ asset('assets/images/slider/3.jpg') }}" alt="" width="1500" height="504"    data-bgrepeat="no-repeat" data-bgparallax="1">
              </li>
                
          </ul>
      </div>
  </section>
    <!--about start-->
    <section class="about" style="background-image:url({{ asset('assets/images/background/about-bg.jpg') }});">
            <div class="container">
                <div class=classtem-box">
                    <div class="row">
                        <div class="single-column col-md-7 col-sm-12">

                            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div id="post-content">
                                    <div class="sec-title">
                                        <h2>About Our Company</h2>
                                    </div>
                                    <div class="text">
                                        <p>Amrit Autotech Engineers located on the outskirts of Gurugram. Amrit Autotech Engineers is fast growing professionally managed company specializing in the machine’s design, development and manufacture of Special Purpose Machines for assembly and testing. </p>
                                    </div>
                                    <h4 class="sec-title" style="color: #f0ad4e">We Design & Develop any kind of Machines as per requirement we deal in:-</h4>
                                    <ul class="list">
                                        <li> End to end solutions including concept, Hardware and Software</li>
                                        <li> Special Purpose machine for Assembly line & Testing</li>
                                       {{--  <li> Low cost Automation in Industrial unit</li>
                                        <li> SCADA Systems</li>
                                        <li> Pick & Place unit conveyors systems</li> --}}


                                        
                                       
                               
                                    </ul>
                                    <a href="{{ route('front.about') }}" class="btn btn-warning btn-xs" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-column about_carousel col-md-5 col-sm-12">
                            
                
                            {{-- <div class="panel panel-primary">
                                 <div class="panel-heading text-center" >Notice Board</div>
                                    <div class="panel-body">
                                     <marquee direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" style="height:150px;">
                                     @foreach ($news as $new)
                                      <p><i class="fa fa-hand-o-right text-danger"></i> {{$new->news}}</p>   
                                    
                                      @endforeach
                                      </marquee>
                                    </div>
                            </div> --}}

                            <img src="{{ asset('assets/images/background/about.jpg') }}" class="img-responsive" style="height: 250px; width: 100%">
                   
                        </div>
                
                    </div>
                </div>
            </div>
    </div>

    </section>
    
        <!--about end-->
   
  <section class="our-service">
 
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <div class="sec-title text-center">
                <h2>OUR PREFERENCE</h2>
              </div>
              <img align="left" src="{{ asset('assets/images/background/custumer.jpg') }}" style="height: 170px; width: 220px;">
              <p><span style="font-size: 20px;">Amrit Autotech Engineers </span> is working in Automation Industry since 2015. <br>In this short time Company got many success steps due to its employee’ s hardwork. In this short time we provide better solutions to our customers with best Engineering technology.
                 </p>
            </div>
                    
       <div class="col-md-6">
             <div class="sec-title text-center">
                <h2>Our Merits</h2>
              </div>
               <ul style="list-style-type:circle">
                 <li><p align="justify">Unique and creative solutions that meet the clients’ expectations not only by realizing.</p></li>
                 <li><p align="justify">Continuous search for opportunities in Automobile and Low cost Automation solutions.</p></li>
                 <li><p align="justify">Creative approaches to the clients’ special needs.</p></li>
                 <li><p align="justify">Team work based on the implementation of latest automation technology.</p></li>
                 <li><p align="justify">Professional quality of services provided by a highly motivated team.</p></li>
                 <li><p align="justify">Courage and readiness to communicate on behalf of client in crisis.</p></li>
                 <li><p align="justify">Strong technological background.</p></li>

               </ul>
               
            </div>
       
    </div>
</section> 

<!--feature-two-->
        <section class="feature-two">

            <div class="feature-two-carousel">
                <div class="single-item">
                    <div class="image-holder">
                        <img src="{{ asset('assets/images/gallery/1.jpg') }}" alt="autotech" />
                        <div class="overlay">
                            <div class="inner">
                                <ul class="social">
                                    <li><a href="{{ asset('assets/images/gallery/s1.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-item">
                    <div class="image-holder">
                        <img src="{{ asset('assets/images/gallery/2.jpg') }}" alt="autotech" />
                        <div class="overlay">
                            <div class="inner">
                                <ul class="social">
                                    <li><a href="{{ asset('assets/images/gallery/s2.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-item">
                    <div class="image-holder">
                       <img src="{{ asset('assets/images/gallery/3.jpg') }}" alt="autotech" />
                        <div class="overlay">
                            <div class="inner">
                                <ul class="social">
                                    <li><a href="{{ asset('assets/images/gallery/s3.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                 <div class="single-item">
                    <div class="image-holder">
                       <img src="{{ asset('assets/images/gallery/5.jpg') }}" alt="autotech" />
                        <div class="overlay">
                            <div class="inner">
                                <ul class="social">
                                    <li><a href="{{ asset('assets/images/gallery/s5.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-item">
                    <div class="image-holder">
                        <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="autotech" />
                        <div class="overlay">
                            <div class="inner">
                                <ul class="social">
                                    <li><a href="{{ asset('assets/images/gallery/s4.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!--feature-two end-->

        <section class="call-to-action">
            <div class="container">
                <div class="overlay">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>24/7 availability</h3>
                            <p>Unique and creative solutions that meet the clients’ expectations not only by realizing.</p>
                        </div>
                        <div class="col-md-3">
                            <ul class="link_btn">
                                <li><a href="{{ route('front.contact') }}" class="thm-btn">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
    
   

@endsection
@push('scripts')


{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

