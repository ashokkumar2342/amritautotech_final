@extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')

    
  <!--Page Title-->
        <section class="page-title">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                        <h1>Principal Message</h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"><a href="{{ route('front.home') }}">Home</a>&ensp;>&ensp;<a href="#">Principal Message</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </section>
        <!--Page Title Ends-->
    <!--about style-two start-->
        <section class="about style-two">
            <div class="container">
                <div class="item-box">
                    <div class="row">
                          <div class="single-column col-md-6 col-sm-12">
                            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="post-content">
                                    <div class="sec-title">
                                        <h2>Principal Message</h2>
                                    </div>
                                    <div class="text">
                                        <p style="text-align:justify">
Dreams just convert into reality when similarly invested people meet up on a typical stage and put aside individual contrasts to focus on and work towards the perfect of improving the world a place. 
Here, in SB model School we are honored with one such group. 
Here enchantment is fashioned every day.<br> 
For the individuals who are not aware of our own reality, the changes are both blinding and confounding. 
Yes, dear Staff,it is your affection that has changed the lives of the youthful ones whom you have supported in the palms of your hands,forming them and molding them into glorious hawks prepared to take off into the ether on wings of sympathy and elegance. It is your devotion that has fashioned this most superb change and it is your dedication that has inserted values profound inside them. 

</p>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        <div class="single-column about_carousel col-md-6 col-sm-12">
                            
                               
                                    <div class="img-holder" style="margin-top:50px">
                                        <img src="{{ asset('assets/images/about/about.png') }}" alt="Awesome Image" />
                                    </div>
                                                               
                           
                        </div>
            
                    </div>
                </div>
            </div>
        </section>
        <!--about style-two end-->

 
    
@endsection
@push('scripts')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush

