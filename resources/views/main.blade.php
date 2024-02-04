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

        <!-- Table datatable css -->
        <link href="{{url('assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{url('assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

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

        <!-- Start Javascript Plugin -->
        <script src="{{url('assets/js/vendor.min.js')}}"></script>
        <script src="{{url('assets/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{url('assets/libs/raphael/raphael.min.js')}}"></script>

        <script src="{{url('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <script src="{{url('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{url('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

        <script src="{{url('assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{url('assets/libs/datatables/buttons.print.min.js')}}"></script>

        <script src="{{url('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{url('assets/libs/datatables/dataTables.select.min.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{url('assets/js/pages/datatables.init.js')}}"></script>

        <script src="{{url('assets/js/app.min.js')}}"></script>
        <script src="{{url('assets/js/report.js')}}"></script>
        <!-- End Javascript Plugin -->

    </body>
</html>
