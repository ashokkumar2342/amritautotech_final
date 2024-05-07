 @extends('front.layout.main')
@push('styles')
 
@endpush
@section('body')
   <!--Page Title-->
    <section class="page-title">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                    <h1>Enquiry</h1>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"><a href="{{ route('front.home') }}">Home</a>&ensp;>&ensp;<a href="#">Enquiry</a>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </section>
        
    <section class="contact_us">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Enquiry <span> Form</span></h2>
                
            </div>
            <div class="default-form-area">
              
                <form   name="contact_form" class="default-form" action="{{ route('front.enquiry.post') }}" method="post"> {!! csrf_field() !!}

                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group style-two">
                                <input type="text" name="name" class="form-control" value="" placeholder="Name" required="">
                            </div>
                        </div>
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group style-two">
                                <input type="text" name="mobile" class="form-control" value="" placeholder="Mobile No." required="">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group style-two">
                                <input type="email" name="email" class="form-control required email" value="" placeholder="Email" >
                            </div>
                        </div>
                         
                       
                        
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group style-two">
                                <input type="text" name="address" class="form-control" value="" placeholder="Address">
                            </div>
                        </div>
                         
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group style-two">
                                <textarea name="message" class="form-control textarea required" placeholder="Message"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="contact-section-btn text-center">
                        <div class="form-group style-two">
                            
                            <button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


		
  
    
@endsection
 @push('scripts') 
</script>
@if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif
@endpush
