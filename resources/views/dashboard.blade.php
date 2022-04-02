<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="Edumin - Bootstrap Admin Dashboard">
    <meta property="og:title" content="Edumin - Bootstrap Admin Dashboard">
    <meta property="og:description" content="Edumin - Bootstrap Admin Dashboard">
    <meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/summernote/summernote.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin-3.css') }}">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>


    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.html" class="brand-logo">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>


        <div class="header">
            @include('navs.header')
        </div>


        <div class="dlabnav">
            @include('navs.sidenav');
        </div>


        <div class="content-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-users"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Total Documents</p>
                                        <h3 class="text-white">{{ $documents }}</h3>
                                        <div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%">
                                            </div>
                                        </div>
                                        <small>80% Increase in 20 Days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6 col-sm-6">
                        <div class="widget-stat card bg-danger">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-dollar"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Total Users</p>
                                        <h3 class="text-white">{{ $users }}</h3>
                                        <div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 30%">
                                            </div>
                                        </div>
                                        <small>30% Increase in 30 Days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="copyright">
                <p>Copyright @
                    2022</p>
            </div>
        </div>

    </div>



    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>

    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/sparkline-init.js') }}"></script>

    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/morris/morris.min.js') }}"></script>

    <script src="{{ asset('js/plugins-init/widgets-script-init.js') }}"></script>

    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>

    <script src="{{ asset('vendor/summernote/js/summernote.min.js') }}"></script>

    <script src="{{ asset('js/plugins-init/summernote-init.js') }}"></script>

    <script src="{{ asset('vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ asset('vendor/svganimation/svg.animation.js') }}"></script>
    <script src="j{{ asset('s/styleSwitcher.js"') }}></script>
</body>

</html>
