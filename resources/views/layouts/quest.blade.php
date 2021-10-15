<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Experts+ - Online Course & Education" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Experts+ - Online Course & Education</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/site/images/favicon.ico') }}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('assets/site/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/css/magnific-popup/magnific-popup.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}" />

</head>

<body>

    <!--=================================
    Header -->
    <header class="header  header-style-02 header-sticky">
        <nav class="navbar navbar-static-top navbar-expand-lg px-3 px-md-5">
            <div class="container-fluid position-relative px-0">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="fas fa-align-left"></i></button>
                <!-- <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="images/logo.svg" alt="logo">
          </a>
          <a class="navbar-brand navbar-brand-sticky" href="index.html">
            <img class="img-fluid" src="images/logo.svg" alt="logo">
          </a> -->
                <div style="padding-right: 6%">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.index') }}">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Experts+<br />
                                Educational Center
                            </a>
                        </li>
                    </ul>
                </div>
                @if (!Auth::check())
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown nav-item">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Pages<i
                                        class="fas fa-chevron-down fa-xs"></i></a>
                                <ul class="dropdown-menu megamenu dropdown-menu-lg">
                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-6">
                                                <h6 class="nav-title">Basic Pages</h6>
                                                <ul class="list-unstyled mt-lg-1">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.contact') }}"><span>Contact
                                                                us</span></a></li>
                                                    <li><a class="dropdown-item" data-toggle="modal"
                                                            data-target="#loginModal" href="#"><span>login</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <h6 class="nav-title">Information Pages</h6>
                                                <ul class="list-unstyled mt-lg-1">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.privacy') }}"><span>Privacy
                                                                policy</span></a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.terms') }}"><span>Terms &
                                                                conditions</span></a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.fags') }}"><span>FAQs</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="{{ route('site.contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="woo-action">
                        <ul class="list-unstyled">
                            <li class="user"><a data-toggle="modal" data-target="#loginModal" href="#"><i
                                        class="fa fa-user pl-2 text-primary"></i>&nbsp;&nbsp;Login/Register</a></li>
                        </ul>
                    </div>
                @else
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses<i
                                        class="fas fa-chevron-down fa-xs"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="course.blade.php"><span>All Courses</span></a>
                                    </li>
                                    <li><a class="dropdown-item" href="course.blade.php"><span>Recommended
                                                Coursed</span></a></li>
                                    <li><a class="dropdown-item" href="mycourse.blade.php"><span>My Courses</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">Pages<i
                                        class="fas fa-chevron-down fa-xs"></i></a>
                                <ul class="dropdown-menu megamenu dropdown-menu-lg">
                                    <li>
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 col-md-6">
                                                <h6 class="nav-title">Basic Pages</h6>
                                                <ul class="list-unstyled mt-lg-1">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.contact') }}"><span>Contact
                                                                us</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <h6 class="nav-title">Information Pages</h6>
                                                <ul class="list-unstyled mt-lg-1">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.privacy') }}"><span>Privacy
                                                                policy</span></a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.terms') }}"><span>Terms &
                                                                conditions</span></a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('site.fags') }}"><span>FAQs</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="nav-link" href="{{ route('site.contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="woo-action">
                        <ul class="list-unstyled">
                            <ul class="list-unstyled">
                                <li class="user"><a
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                        href=""><i class="fa fa-user pl-2 text-primary"></i>&nbsp;&nbsp;Logout</a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>
    </header>
    <!--=================================
    Header -->

    <!--=================================
    Modal login -->
    <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                                aria-controls="login" aria-selected="false"> <span> Log in</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                aria-controls="register" aria-selected="true"><span>Register</span></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="form-row my-4 align-items-center">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form class="form-row my-4 align-items-center" action="{{ route('register') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" placeholder="First Name" minlength="4"
                                        maxlength="20" name="fname" id="fname" value="{{ old('fname') }}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" placeholder="Last Name" minlength="4"
                                        maxlength="20" name="lname" id="lname" value="{{ old('lname') }}" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input class="form-control date" type="text" placeholder="Birthdate"
                                        name="birthDate" id="birthDate" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control" name="gander" id="gander">
                                        {{-- <option disabled selected> -- Select Gender -- </option> --}}
                                        <option value="" disabled selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <select class="form-control" name="major_id" id="major_id" required>
                                        <option style="display:none" selected disabled>Choose Your Major:</option>
                                        @foreach ($majors as $major)
                                            <option value="{{ $major->id }}">{{ $major->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" placeholder="Username" minlength="4"
                                        maxlength="10" name="username" id="username" value="{{ old('username') }}"
                                        required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone"
                                        id="phone" value="{{ old('phone') }}" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email"
                                        id="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Password" minlength="4"
                                        maxlength="10" name="password" id="password" value="{{ old('password') }}">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Confirm Password"
                                        minlength="4" maxlength="10" name="password_confirmation"
                                        id="password_confirmation" value="{{ old('password_confirmation') }}">
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    Modal login -->

    @yield('content')

    <!--=================================
    footer-->
    <footer class="footer ">
        <div class="space-ptb bg-overlay-white-97"
            style="background-image: url('{{ asset('assets/site/images/bg/05.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="footer-contact-info">
                            <div class="footer-logo mb-2">
                                <h5 class="footer-title">Contact us</h5>
                            </div>
                            <div class="contact-address">
                                <div class="contact-item mb-3 mb-md-4">
                                    <h4 class="mb-0 font-weight-normal"><a href="#">+(974) 701-231-58</a></h4>
                                </div>
                                <div class="contact-item">
                                    <a href="#">experts.plus.center@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="social-icon text-md-left text-center mb-3 mb-md-0">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright text-md-right text-center">
                            <p class="mb-0 small">© Copyright 2021 <a href="">Experts+ Development Team</a> All
                                Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
      footer-->

    <!--=================================
      Back To Top -->
    <div id="back-to-top" class="back-to-top">
        <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!--=================================
      Back To Top -->

    <!--=================================
      Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('assets/site/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('assets/site/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/site/js/select2/select2.full.js') }}"></script>
    <script src="{{ asset('assets/site/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/jarallax/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/counter/jquery.countTo.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('assets/site/js/custom.js') }}"></script>

</body>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" media="screen"
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
<script type="text/javascript">
    $('.date').datepicker({
        dateFormat: 'yy-mm-dd',
        changeYear: true,
        changeMonth: true,
        showAnim: "fold"
    });
</script>

</html>
