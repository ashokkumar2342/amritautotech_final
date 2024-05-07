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
             
            <h3> About Our Company</h3>
            <div class="row">
              <div class="col-md-8">
                <p style="text-align:justify">
             Amrit Autotech Engineers located on the outskirts of Gurgaon. Amrit Autotech Engineers is fast growing professionally managed company specializing in the machine’s design, development and manufacture of Special Purpose Machines for assembly and testing. </p>.
             <h4>We Design & Develop any kind of Machines as per requirement we deal in:-</h4>
             <ul class="list" >
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> End to end solutions including concept, Hardware and Software.</p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Special Purpose machine for Assembly line & Testing. </p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> SCADA Systems.</p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Pick & Place unit conveyors systems.</p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> History:<br>
                AmritAutotechEngineers in 2015 as part of the Special Purpose Machines manufacture & Low Cost Automation Solutions.2018-2019 Company Turnover 307 lakh. 
                </p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Current permanent staff: 20 <br>
                Electrical & Machine Design:-05<br>
                Mechanical & Assembly:-05<br>
                Tool Room :-08 <br>
                Accounts:-01<br>
                Store:-01

                </p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Address:-Plot no.192/2A, Gali No.2, Rattan Vihar, Rajendra Park Gurgaon-122001(Haryana).</p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Work Office:-Plot no.15, Gali No.9, Kadipur Industrial Area, Gurgaon-122001(Haryana).</p></li>
               <li><p><i class="fa fa-hand-o-right" aria-hidden="true"></i> End to end solutions including concept, Hardware and Software.</p></li>

             </ul>
                    
              

                     </p><h4>Our Merits</h4>
           
                     
              <ul class="list">
               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Unique and creative solutions that meet the clients’ expectations not only by realizing.</p></li>

               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Continuous search for opportunities in Automobile and Low cost Automation solutions.</p></li>


               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Creative approaches to the clients’ special needs.</p></li>

               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Team work based on the implementation of latest automation technology.</p></li>


               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Professional quality of services provided by a highly motivated team.</p></li>

               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Courage and readiness to communicate on behalf of client in crisis.</p></li>


               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Strong technological background.</p></li>

               <li> <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> 24/7 availability.</p></li>

              </ul>  
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

