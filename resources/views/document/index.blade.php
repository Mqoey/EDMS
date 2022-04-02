<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="{{ asset('images/favicon.ico" type="image/x-icon') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <title>Documents</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.cs') }}s">
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
                            <h4>All Documents</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Documents</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Document</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row tab-content">
                            <div id="list-view" class="tab-pane fade active show col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All Documents List </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example3" class="display" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>Flight Crew</th>
                                                        <th>Last Name</th>
                                                        <th>First Name</th>
                                                        <th>Licence Number</th>
                                                        <th>Date of Issue</th>
                                                        <th>Expiry Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($documents as $document)
                                                        <tr>
                                                            <td>{{ $document->flight_crew }}</td>
                                                            <td>{{ $document->last_name }}</td>
                                                            <td>{{ $document->first_name }}</td>
                                                            <td>{{ $document->licence_number }}</td>
                                                            <td>{{ $document->date_of_issue }}</td>
                                                            <td>{{ $document->expiry_date }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
                <p>Copyright © 2021</p>
            </div>
        </div>

    </div>



    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>

    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>

    <script src="{{ asset('vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ asset('vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
</body>

</html>
