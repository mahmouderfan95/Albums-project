<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Album task">
    <meta name="keywords" content="Album task">
    <meta name="author" content="Mahmoud Esmail">
    <link rel="icon" href="{{asset('backend/style_login/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('public/backend/style_login/images/favicon.png')}}" type="image/x-icon">
    <title>تسجيل الدخول</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('public/backend/style_login/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/responsive.css')}}">
    <!-- rtl style -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/style_login/css/rtl.css')}}">
</head>
<body>
<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo" href="#"><img class="img-fluid for-light" src="{{asset('public/backend/style_login/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('public/backend/style_login/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                    <div class="login-main">
                        <form action="{{route('user.post.login')}}" method="POST" class="theme-form">
                            @csrf
                            <h4l>Login to by account</h4l>
                            <p>Enter Email and passowrd</p>
                            <div class="form-group">
                                <label for="email"  class="col-form-label">Email</label>
                                <input id="email" name ="email" class="form-control" type="email" required="" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('public/backend/style_login/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('public/backend/style_login/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('public/backend/style_login/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('public/backend/style_login/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset('public/backend/style_login/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('public/backend/style_login/js/script.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
</div>
</body>
</html>


