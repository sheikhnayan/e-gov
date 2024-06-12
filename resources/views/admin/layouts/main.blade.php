

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css')}}?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
            @include('admin.layouts.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @yield('content')
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Team</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
            </div>
            </div>
            </body>
            <!--   Core JS Files   -->
            <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
            <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
            <script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
            <!--  Google Maps Plugin    -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <!--  Chartist Plugin  -->
            <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
            <!--  Notifications Plugin    -->
            <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
            <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
            <script src="{{asset('assets/js/light-bootstrap-dashboard.js')}}?v=2.0.0 " type="text/javascript"></script>
            <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
            <script src="{{asset('assets/js/demo.js')}}"></script>
            <script type="text/javascript">
            $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();

            });
            </script>

            </html>
