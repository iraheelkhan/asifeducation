<!DOCTYPE html>
	<html lang="en">

	<head>
    <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <!-- Title Page-->
        <title>@yield('title')</title>
        <!-- Fontfaces CSS-->
        <link href="{{asset('public/css/font-face.css') }}" rel="stylesheet" media="all">
        <!-- <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet" media="all"> -->
        <!-- <link href="{{asset('public/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all"> -->
        <!-- <link href="{{asset('public/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <!-- Bootstrap CSS-->
        <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" media="all">
        <!-- Vendor CSS-->
        <link href="{{asset('public/css/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('public/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('public/css/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('public/css/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('public/css/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('public/css/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('public/css/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
        <link href="http://localhost/raheel/cvmaker/public/css/datatables.min.css" rel="stylesheet" media="all">
        <link href="{{asset('public/css/theme.css')}}" rel="stylesheet" media="all">
        <script src="{{ asset('public/js/jquery-3.2.1.min.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <link href="{{asset('public/css/datatables.min.css')}}" rel="stylesheet" media="all">
        <script src="{{asset('public/js/datatables.min.js')}}"></script>

    </head>
    <body>

    <div class="page-wrapper">

        @include('../inc/sidemenu')
        <div class="page-container">
            @include('../inc/topmenu')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @yield('modals')

    </div>
   	
    <!-- Bootstrap JS-->
    <script src="{{ asset('public/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
    <!-- asset(' JS       -->
    <script src="{{ asset('public/js/slick.js')}}">
    </script>
    <script src="{{ asset('public/js/wow.min.js')}}"></script>
    <script src="{{ asset('public/js/animsition.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('public/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('public/js/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('public/js/circle-progress.min.js')}}"></script>
    <script src="{{ asset('public/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('public/js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('public/js/select2.min.js')}}">
    </script>

    </body>
</html>