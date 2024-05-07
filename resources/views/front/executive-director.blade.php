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
             
            <h3> Executive Director</h3>
            <div class="row">
              <div class="col-md-8">
                <p style="text-align:justify">
                <img src="{{ asset('assets/images/background/KUSUM.jpg') }}" class="thumbnail" align="right" style="height: 185px; width:145px; margin-left: 10px;" alt="Executive Director kusum ">
             Kusumis AAE's Executive Director. In her role of Executive Director, she has responsibility for new business development and supporting the growth of accounts. She also provides consulting services to clients in the Automation Training Programs.She has experience of lecturer of Engineering. </p>
             <p>She started working in Amrit Autotech Engineers in 2015.</p>
             <p>Kusum graduated from the Kurukshetra University with a degree in Electronic &amp; communication. She is fluent in Hindi and English.</p>
             
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

