<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{$description}}" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body class="left-side-menu-dark topbar-light">
        <div id="wrapper">
            @include('layout.header')
            @include('layout.sidebar')

            <div class="content-page">
                <div class="content">

                    @yield('content')

                </div>

                @include('layout.footer')

            </div>
        </div>

        <!-- Start Javascript -->
        <script src="{{url('assets/js/vendor.min.js')}}"></script>
        <script src="{{url('assets/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{url('assets/libs/raphael/raphael.min.js')}}"></script>
        {{--<script src="{{url('assets/js/pages/dashboard.init.js')}}"></script>--}}
        <script src="{{url('assets/js/app.min.js')}}"></script>
        <!-- End Javascript -->

    </body>
</html>
