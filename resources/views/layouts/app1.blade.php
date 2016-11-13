<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>CTMP</title>
        @section('header')
        @show
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- bootstrap & fontawesome -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/font-awesome/4.2.0/css/font-awesome.min.css')}}" />
                <!-- page specific plugin styles -->
        <!-- text fonts -->
        <link rel="stylesheet" href="{{ asset('/fonts/fonts.googleapis.com.css') }}" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{ asset('/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{ asset('/js/ace-extra.min.js') }}"></script>
        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
    </head>

    <body class="no-skin">


        <div class="main-container" id="main-container">


        @yield('content')

        @include('utilitarios.footer')


        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="{{ asset('/js/jquery.2.1.1.min.js') }}"></script>

        <!-- <![endif]-->

        @section('header')
        @show

        <!--[if IE]>
        <script src="assets/js/jquery.1.11.1.min.js"></script>
        <![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/js/jquery.min.js'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

        
        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]--> 

        <script src="{{ asset('/js/jquery-ui.custom.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.flot.pie.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.flot.resize.min.js') }}"></script>

        <!-- ace scripts -->
        <script src="{{ asset('/js/ace-elements.min.js') }}"></script>
        <script src="{{ asset('/js/ace.min.js') }}"></script>

    </body>
</html>