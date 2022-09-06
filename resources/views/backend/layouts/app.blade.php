<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Album task">
    <meta name="author" content="Album task">
    <meta name="keywords" content="directory listing html template, bootstrap html template, directory html template, directory website template, directory listing html template, directory listing template, listing website template, business directory template, membership directory template, directory template, service directory template, bootstrap business directory template, directory listing website template, business directory html template, online directory template, online directory website templates, best website templates, html template, html5 template, themeforest html, themeforest html templates">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title')</title>
    @include('backend.layouts.admin.head')
    @yield('styles')
</head>
<body class="app sidebar-mini">


<div class="page">
    <div class="page-main">
        @include('backend.layouts.admin.header')
        @include('backend.layouts.admin.sidebar')
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('sub-title')</li>
                    </ol>

                </div>
                <div class="row">
                    @yield('table')
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
@include('backend.layouts.admin.footer')
<!-- End Footer-->
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

@include('backend.layouts.admin.footer_scripts')
</body>
</html>
