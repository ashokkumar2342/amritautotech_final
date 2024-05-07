@extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')

    
   <!--Page Title-->
        <section class="page-title">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"><a href="{{ route('front.home') }}">Home</a>&ensp;>&ensp;<a href="#">Contact Us</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </section>
        <!--Page Title Ends-->
    <!--contact-address start-->
        <section class="contact-address">
            <div class="container">
                <div class="inner-box">
                    <div class="item-list">
                        <div class="row">
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="border">
                                    <div class="icon-box">
                                        <i class="icon fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <h3>Address</h3>
                                <p>Reg.Office:- H-5 PHASE 2 NEW PALAM Vihar,GURUGRAM-122017 (Haryana)
                                    </p>
                                     <p>Work Office:- PLOT NO.15, GALI NO.9, KADIPUR INDUSTRIAL AREA, GURUGRAM - 122001 (Haryana)
                                    </p>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="border">
                                    <div class="icon-box">
                                        <i class="icon fa fa-phone"></i>
                                    </div>
                                </div>
                                <h3>Phone</h3>
                                <p>+918010383055, 8750551555</p>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12">
                                <div class="border">
                                    <div class="icon-box">
                                        <i class="icon fa fa-envelope"></i>
                                    </div>
                                </div>
                                <h3>Email</h3>
                                <p>tech.aae@gmail.com, amit@amritautotech.com</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--contact-address end-->
    <!--contact_details start-->
        <section class="contact_details sec-padd">
            <div class="container">
                <div class="home-google-map">
                      
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14022.700191355214!2d77.00922317550149!3d28.519422869398632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a0441341d35%3A0x24c64f97cd222a70!2sNew+Palam+Vihar+Phase+2%2C+Sector+110%2C+Gurugram%2C+Haryana!5e0!3m2!1sen!2sin!4v1505739033935" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    <!--contact_details end-->

    <!--contact_us start-->
        <section class="contact_us">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>Get In <span>Touch</span></h2>
                    
                </div>
                <div class="default-form-area">
                <form class="form-horizontal" action="{{ route('front.contact.post') }}" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>
              {!! csrf_field() !!}
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="mobile" name="name" type="text" placeholder="Your name" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="Mobile">Mobile</label>
              <div class="col-md-9">
                <input id="name" name="mobile" type="text" placeholder="Your Mobile Number" class="form-control" required>
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control" >
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-md">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
                {{--     <form    class="default-form" action="{{ route('front.contact.post') }}" method="post">
                        {!! csrf_field() !!}

                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group style-two">
                                    <input type="text" name="name" class="form-control" value="" placeholder="Enter your name" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group style-two">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder=" Enter your email" >
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group style-two">
                                    <input type="text" name="mobile" class="form-control" value="" placeholder="Enter your Mobile number" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group style-two">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="contact-section-btn text-center">
                            <div class="form-group style-two">
                               
                                <button class="thm-btn thm-color" type="submit" >send message</button>
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>
        </section>
        <!--contact_us end-->

 
    
@endsection
 
 @push('scripts') 
</script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush
