<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Deeplearning</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body class="authentication-bg">
        <div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">

                                    <div class="text-center">
                                        <div class="my-3">
                                            <a href="#">
                                                <span><img src="{{url('assets/images/logo.png')}}" alt="" height="28"></span>
                                            </a>
                                        </div>
                                        <h5 class="text-muted py-3 font-16">Welcome on Deeplearning CNN Website</h5>
                                    </div>
                                    <form id="loginForm" method="POST" class="validate">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input class="form-control" name="name" type="text" required="" placeholder="Username">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input class="form-control" name="password" type="password" required="" id="password" placeholder="Password">
                                        </div>

                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Log In </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="{{url('assets/js/vendor.min.js')}}"></script>
        <script src="{{url('assets/js/app.min.js')}}"></script>
        <script src="{{url('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="{{url('assets/libs/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{url('assets/js/login.js')}}"></script>

    </body>
</html>
