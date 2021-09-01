<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" sizes="76x76" href={{ asset('/assets/img/apple-icon.png') }}>
    <link rel="icon" type="image/png" href={{ asset('/assets/img/favicon.png') }}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Experts+ Admin Panel
        {{-- {{ Auth::user()->fname }} --}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel='stylesheet' href={{ asset('/assets/css/material-dashboard.css?v=2.1.0') }} />

    {{-- <style>
        .accordion {
            color: #444;
            cursor: pointer;
            padding: 18%;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: inherit;
        }

        .panel {
            padding: 0% 18%;
            background-color: inherit;
            padding-left: 18%;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style> --}}
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black"
            data-image="{{ asset('/assets/img/sidebar-2.jpg') }}">

            <div class="logo">
                <a href="" class="simple-text logo-normal">Experts+ Admin Panel</a>
            </div>

            <div class="sidebar-wrapper" style="padding-top: 4%">
                <ul class="nav">
                    
                </ul>
                <ul class="nav">
                    <li class="nav-item" style="padding-bottom: 20%">
                        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse justify-content-start">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">person</i>
                                                <p class="d-lg-none d-md-block">
                                                    Account
                                                </p>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left"
                                                aria-labelledby="navbarDropdownProfile">
                                                <a class="dropdown-item" href="#">Profile</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Log out</a>
                                            </div>   
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="collapse" href="#department" aria-expanded="fales">
                            <i class="material-icons">dashboard</i>
                            <p>Department<b class="caret"></b></p>
                        </a>
                        <div class="collapse pl-5" id="department">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('storeCollege') }}">
                                        <span class="sidebar-normal">Add Department</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="lfjasdlfjlaskdjf">
                                        <span class="sidebar-normal">List Departments</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="*">
                                        <span class="sidebar-normal">Update Department</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Colleges" aria-expanded="false">
                            <i class="material-icons">dashboard</i>
                            <p>Colleges<b class="caret"></b></p>
                        </a>
                        <div class="collapse pl-5" id="Colleges">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('storeCollege') }}">
                                        <span class="sidebar-normal">Add College</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="*">
                                        <span class="sidebar-normal">List Colleges</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="*">
                                        <span class="sidebar-normal">Update College</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Majors" aria-expanded="false">
                            <i class="material-icons">dashboard</i>
                            <p>Majors<b class="caret"></b></p>
                        </a>
                        <div class="collapse pl-5" id="Majors">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="*">
                                        <span class="sidebar-normal">Add Major</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="*">
                                        <span class="sidebar-normal">List Majors</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="*">
                                        <span class="sidebar-normal">Update Major</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                          <i><img style="width:25px" src="https://material-dashboard-laravel.creative-tim.com/material/img/laravel.svg"></i>
                          <p>Laravel Examples
                            <b class="caret"></b>
                          </p>
                        </a>
                        <div class="collapse show" id="laravelExample" style="">
                          <ul class="nav">
                            <li class="nav-item">
                              <a class="nav-link" href="https://material-dashboard-laravel.creative-tim.com/profile">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">User profile </span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://material-dashboard-laravel.creative-tim.com/user">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> User Management </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link accordion">
                            <i class="material-icons">dashboard</i>
                            <p>Department</p>
                        </a>
                        <ul class="panel" style="list-style-type: none;">
                            <li><a href="#">Add Department</a></li>
                            <li><a href="#">List Department</a></li>
                            <li><a href="#">Update Department</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accordion">
                            <i class="material-icons">dashboard</i>
                            <p>Colleges</p>
                        </a>
                        <ul class="panel" style="list-style-type: none;">
                            <li><a href="#">Add College</a></li>
                            <li><a href="#">List College</a></li>
                            <li><a href="#">Update College</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link accordion">
                            <i class="material-icons">dashboard</i>
                            <p>Majors</p>
                        </a>
                        <ul class="panel" style="list-style-type: none;">
                            <li><a href="#">Add Major</a></li>
                            <li><a href="#">List Major</a></li>
                            <li><a href="#">Update Majors</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="bg-dark text-center text-white">
                <!-- Grid container -->
                <div class="container p-4">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fa fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fa fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fa fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fa fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fa fa-linkedin"></i></a>

                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fa fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Text -->
                    <section class="mb-4">
                        <p>
                            We build Future
                        </p>
                    </section>
                    <!-- Section: Text -->

                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#!" class="text-white">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#!" class="text-white">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#!" class="text-white">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#!" class="text-white">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="text-white">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);" id="date">
                    Copyright:
                    <a class="text-white" href="/">Experts+ Devlopment Team</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
            <script>
                const x = new Date().getFullYear();
                let date = document.getElementById('date');
                date.innerHTML = '&copy; ' + x + date.innerHTML;
            </script>
        </div>
    </div>

    <script src={{ asset('/assets/js/core/jquery.min.js') }}></script>
    <script src={{ asset('/assets/js/core/popper.min.js') }}></script>
    <script src={{ asset('/assets/js/core/bootstrap-material-design.min.js') }}></script>
    <script src={{ asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}></script>
    {{-- <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    <!--  Google Maps Plugin    -->
    <!-- Chartist JS -->
    <script src={{ asset('/assets/js/plugins/chartist.min.js') }}></script>
    <!--  Notifications Plugin    -->
    <script src={{ asset('/assets/js/plugins/bootstrap-notify.js') }}></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src={{ asset('/assets/js/material-dashboard.js?v=2.1.0') }}></script>

    <script>
        $(document).ready(function () {
            $('.nav li a').click(function(e) {
                $('.nav li.active').removeClass('active');

                var $parent = $(this).parent();
                $parent.addClass('active');
            });
        });
    </script>


    {{-- <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                } 
            });
        }
    </script> --}}
</body>

</html>