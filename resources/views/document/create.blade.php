<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <title>Documents</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/pickadate/themes/default.date.css') }}">
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
                <img class="logo-abbr" src="images/logo-white.png" alt="">
                <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt="">
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
            @include('navs.sidenav')
        </div>


        <div class="content-body">

            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Document</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Document</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Document</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Document</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('document.add') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Flight Crew</label>
                                                <select name="flight_crew" required class="form-control">
                                                    <option value="3409">3409</option>
                                                    <option value="2256" selected="">2256</option>
                                                    <option value="9001">9001</option>
                                                    <option value="1738">1738</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Licence number</label>
                                                <input name="licence_number" type="text" required
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">First name</label>
                                                <input type="text" name="first_name" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Last name</label>
                                                <input name="last_name" type="text" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Date of issue</label>
                                                <input class="form-control" type="date" required
                                                    name="date_of_issue">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Expiry date</label>
                                                <input class="form-control" type="date" required
                                                    name="expiry_date">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2021</p>
            </div>
        </div>

    </div>



    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>

    <script src="{{ asset('vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ asset('vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('vendor/pickadate/picker.date.js') }}"></script>

    <script src="js/plugins-init/pickadate-init.js.vscode/settings.json"></script>

    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
</body>

</html>
