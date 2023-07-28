<!doctype html>

<html lang="zxx">

<body>



    <!-- Mirrored from templates.envytheme.com/MFC/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 04:57:27 GMT -->

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/all-fontawesome.min.css')}}">



    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">

     

    <!-- Nice Select CSS -->

     {{-- <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}"> --}}



    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {{-- <!-- Bootstrap CSS --> 

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Animate CSS --> 

    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

    <!-- Meanmenu CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

    <!-- Boxicons CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">

    <!-- Flaticon CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

    <!-- Odometer CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

    <!-- Nice Select CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">

    <!-- Carousel CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <!-- Carousel Default CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- Magnific Popup CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">

    <!-- Style CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Dark CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}">

    <!-- Responsive CSS -->

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"> --}}



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">



     <!-- jQuery UI datepicker -->

     <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    

    <title>NEW-PROJECT ADMIN PANEL</title>



    <link rel="icon" type="image/png" href="assets/images/favicon.png">

</head>
<body class="form">
    
        <div class="login-area py-5">
            <div class="container">
            <div class="col-md-5 mx-auto">
            <div class="login-form">
            <div class="login-header">
            <h3>Log In</h3>
            </div>
                        <form action="{{route('loginSubmit')}}" method="post">
                            @csrf
                            @if(Session('error'))
                             <div class="alert alert-danger" role="alert">
                              {{Session('error')}}
                            </div>                          
                            @endif
                        
                        <div class="form-group">
                        <label>Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        {{-- <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value id="remember">
                        <label class="form-check-label" for="remember">
                        Remember Me
                        </label>
                        </div>
                        <a href="forgot-password.html" class="forgot-pass">Forgot Password?</a>
                        </div> --}}
                        <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-primary theme-btn">Login <i class="far fa-sign-in"></i></button>
                        </div>
                        </form>
                        <p class="terms-conditions text-center">© 2023 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
       
 


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('public/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('public/assets/js/authentication/form-1.js')}}"></script>

</body>
</html>





