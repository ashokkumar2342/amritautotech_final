 @extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')

    
 <!--Page Title-->
        <section class="page-title">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                       
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"> 
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </section>
        <!--Page Title Ends-->

        <!--Sidebar Page-->
        <div class="sidebar-page">
            <div class="container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="blog-latest-news style-two col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="{{ asset('assets/images/software/1.jpg') }}" alt="electrical" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="{{ asset('assets/images/software/1.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure> 
                                    </div>
                                </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="{{ asset('assets/images/software/2.jpg') }}" alt="electrical" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="{{ asset('assets/images/software/2.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure> 
                                    </div>
                                </div> <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="{{ asset('assets/images/software/3.jpg') }}" alt="electrical" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="{{ asset('assets/images/software/3.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure> 
                                    </div>
                                </div> <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="{{ asset('assets/images/software/4.jpg') }}" alt="electrical" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="{{ asset('assets/images/software/4.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure> 
                                    </div>
                                </div> 
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="{{ asset('assets/images/software/5.jpg') }}" alt="electrical" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="{{ asset('assets/images/software/5.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure> 
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="{{ asset('assets/images/software/6.jpg') }}" alt="electrical" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="{{ asset('assets/images/software/6.jpg') }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure> 
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
                    </div>
                    <!--Content Side-->

                    <!--Sidebar-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <aside class="sidebar">


                            <!-- Popular Categories -->
                            <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="sidebar-title">
                                    <h3>Categories</h3>
                                </div>

                                <ul class="list">
                                    <li><a href="{{ route('front.electrical-division') }}"><span class="icon-left fa fa-chevron-right"></span>Electrical Division</a></li>
                                    <li><a href="{{ route('front.software-division') }}"><span class="icon-left fa fa-chevron-right"></span>Software division</a></li>
                                    <li><a href="{{ route('front.spm-division') }}"><span class="icon-left fa fa-chevron-right"></span>SPM Division</a></li>
                                 
                                </ul>

                            </div>
                            <!-- End of .sidebar_tags -->
                        </aside>
                    </div>
                    <!--Sidebar-->
                </div>
            </div>
        </div>
 
    
@endsection
@push('scripts')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

