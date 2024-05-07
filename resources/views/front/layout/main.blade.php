<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AMRIT AUTOTECH ENGINEERS | Autotech Engineers in gurgaon</title>
    <meta name="Author" content="www.amritautotech.com"/>
        <meta name="keywords" content="Amrit Autotech Engineers in gurgaon | Best Autotech Engineers in gurgaon" />
        <meta name="description" content="Amrit Autotech Engineers located on the outskirts of Gurgaon. Amrit Autotech Engineers is fast growing professionally managed company specializing in the machine’s design, development and manufacture of Special Purpose Machines for assembly and testing." />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}" />
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/favicon.jpg') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon.jpg') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon.jpg') }}" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  </head>
  <body>
    @include('front.include.header')
    
    @yield('body')
    @include('front.include.footer')

    
 <!-- Scroll Top Button -->
    <button class="scroll-top tran3s color2_bg">
        <span class="fa fa-angle-up"></span>
    </button>
    <!-- pre loader  -->
    {{-- <div class="preloader"></div> --}}

    <!-- jQuery js -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- jQuery ui js -->
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- jQuery validation -->
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <!-- google map -->
    <script src="{{asset('assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI')}}"></script>
    <script src="{{asset('assets/js/gmap.js')}}"></script>
    <!-- mixit up -->
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/menuzord.js')}}"></script>

    <!-- revolution slider js -->
    <script src="{{asset('assets/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/assets/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- fancy box -->
    <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('assets/js/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('assets/js/nouislider.js')}}"></script>
    <script src="{{asset('assets/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('assets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('assets/js/imagezoom.js')}}"></script>
    <script src="{{asset('assets/js/validation.js')}}"></script>
    <script id="map-script" src="{{asset('assets/js/default-map.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @stack('scripts')

        <!-- jquery -->
     
  
  
  </body>

 
</html>