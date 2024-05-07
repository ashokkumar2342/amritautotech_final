 @extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')

    
 <!--Page Title-->
        <section class="page-title">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                        <h1>Gallery</h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"><a href="{{ route('front.home') }}">Home</a>&ensp;>&ensp;<a href="#">Gallery</a>
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
                            @foreach($gallaries as $gallery)
                            
                       
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="item">
                                        <figure class="image-box">
                                            <img src="/storage/gallery/{{ $gallery->image }}" alt="{{ $gallery->title }}" style="height: 148px;">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <ul class="social">
                                                        <li><a href="/storage/gallery/{{ $gallery->image }}" data-fancybox-group="example-gallery" class="view lightbox-image"><i class="icon fa fa-search"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                        
                                        
                                    </div>
                                </div>

                             @endforeach

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               {{ $gallaries->links() }} 
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
                                    <li><a href="{{ route('front.new-year') }}"><span class="icon-left fa fa-chevron-right"></span>New Year and Christams Celebration</a>
                                    </li>
                                    <li><a href="{{ route('front.teej-rakhi') }}"><span class="icon-left fa fa-chevron-right"></span>Teej and Rakhi Celebration</a>
                                    </li>
                                    <li><a href="{{ route('front.vanmahotsav') }}"><span class="icon-left fa fa-chevron-right"></span>Van Mahotsav Celebration</a>
                                    </li>
                                    
                                    <li><a href="{{ route('front.janamashtami') }}"><span class="icon-left fa fa-chevron-right"></span>Diwali and Janamashtami Celebration </a>
                                    </li>
                                    
                                    <li><a href="{{ route('front.annualfunction') }}"><span class="icon-left fa fa-chevron-right"></span>Annual Function </a>
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
 
    
@endsection
@push('scripts')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

