
   <div class="header-top">
            <div class="container clearfix">
                <!--Top Left-->
             <div class="row-md-7">
                    <div class="top-left pull-left">
                       <ul class="links-nav clearfix">
                          <li> 
                            <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3">
                                 <ul>
                                    <li> {{-- Admission open for the session of 2017-18 --}} </li>              
           
                                 </ul>
                            </marquee>
                        </li>
                    </ul>
                </div>
             </div>
            <div class="row-md-5">
                    <!--Top Right-->
                <div class="top-right pull-right">
                    <ul class="links-nav clearfix">
                         <li><span class="fa fa-mobile"></span> <b>Call:  +918010383055, 8750551555</b>  
                        </li>
                        <li><span class="fa fa-envelope"></span><b> 
tech.aae@gmail.com, amit@amritautotech.com</b></li>
                        {{-- <li><a href="{{ route('admin.home') }}"><span class="fa fa-user"></span>Admin</a></li> --}}

                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- Header Top End -->

        <!-- Menu -->
        <section class="theme_menu stricky">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="main-logo">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 menu-column">
                        <nav class="menuzord" id="main_menu">
                            <ul class="menuzord-menu">
                                <li class="current"><a href="{{ route('front.home') }}">Home</a>
                                </li>
                                <li> 
                                <a href="#">About</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('front.about') }}">About Company</a></li>
                                        <li><a href="{{ route('front.our.journey') }}">Our Journey</a>
                                        <li><a href="{{ route('front.managing-director') }}">Managing Director</a>
                                        <li><a href="{{ route('front.executive-director') }}">Executive Director</a>

                                        </li>
                                    </ul>
                                </li>
                                 <li> 
                                <a href="#">Division</a>
                                    <ul class="dropdown">                                       
                                        <li><a href="{{ route('front.electrical-division') }}">Electrical Division</a>
                                        </li>
                                         <li><a href="{{ route('front.software-division') }}">Software Division</a>
                                        </li>
                                         <li><a href="{{ route('front.spm-division') }}">SPM Division</a>
                                        </li>
                                    </ul>
                                </li>
                                                                     
                                          
                                 
                                <li><a href="{{ route('front.services') }}">Services</a>
                                <li><a href="{{ route('front.clients') }}">Clients</a>
                                    
                                </li>
                                 <li><a href="{{ route('front.enquiry') }}">Enquiry</a>
                                    
                                </li>
                                <li><a href="{{ route('front.contact') }}">Contact</a>
                                </li>
                            </ul>
                            <!-- End of .menuzord-menu -->
                        </nav>
                        <!-- End of #main_menu -->

                    </div>
                     
                </div>
            </div>
            <!-- End of .conatiner -->
        </section>
        <!-- End of .theme_menu -->