<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">

        <!-- Base Css Files -->
        
<link rel="stylesheet" href="{{ URL::to('assets/css/main.css') }}">
        <link href="{{ URL::to('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/fontello/css/fontello.css') }} " rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/animate-css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/nifty-modal/css/component.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/ios7-switch/ios7-switch.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/pace/pace.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/sortable/sortable-theme-bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" />
        <link href="{{ URL::to('assets/libs/jquery-icheck/skins/all.css') }}" rel="stylesheet" />
        <script src="{{ URL::to('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ URL::to('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::to('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
        <!-- Code Highlighter for Demo -->
        <link href="{{ URL::to('assets/libs/prettify/github.css') }}" rel="stylesheet" />

                <!-- Extra CSS Libraries Start -->
                <link href="{{ URL::to('assets/libs/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/morrischart/morris.css') }} " rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/jquery-clock/clock.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/bootstrap-calendar/css/bic_calendar.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/sortable/sortable-theme-bootstrap.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/jquery-weather/simpleweather.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/libs/bootstrap-xeditable/css/bootstrap-editable.css') }} " rel="stylesheet" type="text/css" />
                <link href="{{ URL::to('assets/css/style.css') }} " rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{ URL::to('assets/css/style-responsive.css') }} " rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{ URL::to('assets/img/apple-touch-icon.png') }}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::to('assets/img/apple-touch-icon-57x57.png')}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('assets/img/apple-touch-icon-72x72.png')}}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('assets/img/apple-touch-icon-76x76.png')}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('assets/img/apple-touch-icon-114x114.png')}}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::to('assets/img/apple-touch-icon-120x120.png')}}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('assets/img/apple-touch-icon-144x144.png')}}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::to('assets/img/apple-touch-icon-152x152.png')}}" />
      @yield('styles')
    </head>
    <body class="fixed-left">
<div id="wrapper">
        @include ('partials.header')

        @include('partials.left_side')
        <div class="content-page">
    <div class="content">
    @include('partials.message')
    
      @yield('contents')
    </div>

    <!-- the overlay modal element -->
  <div class="md-overlay"></div>
  <!-- End of eoverlay modal -->
    <script>
  		var resizefunc = [];
  	</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	
  	<script src="{{ URL::to('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/jquery-detectmobile/detect.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/ios7-switch/ios7.switch.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/fastclick/fastclick.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/nifty-modal/js/classie.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/sortable/sortable.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/bootstrap-select2/select2.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/pace/pace.min.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  	<script src="{{ URL::to('assets/libs/jquery-icheck/icheck.min.js')}}"></script>


    <!-- Demo Specific JS Libraries -->
    <script src="{{ URL::to('assets/libs/prettify/prettify.js') }}"></script>

    <script src="{{ URL::to('assets/js/init.js') }}"></script>
  
    @yield('scripts')
    </body>
    </html>
