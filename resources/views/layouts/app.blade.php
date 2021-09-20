<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
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
  <link rel="stylesheet" href="../../assets/css/material-dashboard.css">


  <!--this is for multi dropdown select-->
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

  

  {{-- <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}
  
  {{-- <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  
  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}
  

  
  {{-- <script src="../../node_modules/remodal/dist/remodal.min.js"></script> --}}
  {{-- <link rel="stylesheet" href="../../node_modules/remodal/dist/remodal.css">
  <link rel="stylesheet" href="../../node_modules/remodal/dist/remodal-default-theme.css">

  <script src="../../node_modules/remodal/dist/remodal.min.js"></script> --}}
  

</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">Experts+ Admin Panel</a>
      </div>
      <div class="sidebar-wrapper" style="padding-top: 4%">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#Colleges" aria-expanded="false">
              <i class="material-icons">dashboard</i>
              <p>Colleges<b class="caret"></b></p>
            </a>
            <div class="collapse pl-5" id="Colleges">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('college.create') }}">
                    <span class="sidebar-normal">Add College</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('college.index') }}">
                    <span class="sidebar-normal">List Colleges</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#department" aria-expanded="fales">
              <i class="material-icons">dashboard</i>
              <p>Department<b class="caret"></b></p>
            </a>
            <div class="collapse pl-5" id="department">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('department.create') }}">
                    <span class="sidebar-normal">Add Department</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('department.index') }}">
                    <span class="sidebar-normal">List Departments</span>
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
                  <a class="nav-link" href="{{ route('major.create') }}">
                    <span class="sidebar-normal">Add Major</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('major.index') }}">
                    <span class="sidebar-normal">List Majors</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#programs" aria-expanded="fales">
              <i class="material-icons">dashboard</i>
              <p>Programs<b class="caret"></b></p>
            </a>
            <div class="collapse pl-5" id="programs">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('program.create') }}">
                    <span class="sidebar-normal">Add Program</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('program.index') }}">
                    <span class="sidebar-normal">List Program</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sections" aria-expanded="fales">
              <i class="material-icons">dashboard</i>
              <p>Sections<b class="caret"></b></p>
            </a>
            <div class="collapse pl-5" id="sections">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('section.create') }}">
                    <span class="sidebar-normal">Add Section</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('section.index') }}">
                    <span class="sidebar-normal">List Section</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#teachers" aria-expanded="fales">
              <i class="material-icons">dashboard</i>
              <p>Teachers<b class="caret"></b></p>
            </a>
            <div class="collapse pl-5" id="teachers">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('teacher.create') }}">
                    <span class="sidebar-normal">Add Teacher</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('teacher.index') }}">
                    <span class="sidebar-normal">List Teacher</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#students" aria-expanded="fales">
              <i class="material-icons">dashboard</i>
              <p>Students<b class="caret"></b></p>
            </a>
            <div class="collapse pl-5" id="students">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('student.create') }}">
                    <span class="sidebar-normal">Add Student</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('student.index') }}">
                    <span class="sidebar-normal">List Student</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your
                    email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
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
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="/" target="_blank">Experts+ Devlopment Team</a>
          </div>
          <nav class="float">
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fa fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fa fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fa fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fa fa-linkedin"></i></a>

              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-github"></i></a>
            </section>
          </nav>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
                let date = document.getElementById('date');
                date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('/assets/img/sidebar-1.jpg') }}" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('/assets/img/sidebar-2.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('/assets/img/sidebar-3.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ asset('/assets/img/sidebar-4.jpg') }}" alt="">
          </a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
  
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
  {{-- <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script> --}}
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script>
    $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
    
            $sidebar_img_container = $sidebar.find('.sidebar-background');
    
            $full_page = $('.full-page');
    
            $sidebar_responsive = $('body > .navbar-collapse');
    
            window_width = $(window).width();
    
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
              if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
              }
    
            }
    
            $('.fixed-plugin a').click(function(event) {
              // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });
    
            $('.fixed-plugin .active-color span').click(function() {
              $full_page_background = $('.full-page-background');
    
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
              }
    
              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
              }
            });
    
            $('.fixed-plugin .background-color .badge').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('background-color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data-background-color', new_color);
              }
            });
    
            $('.fixed-plugin .img-holder').click(function() {
              $full_page_background = $('.full-page-background');
    
              $(this).parent('li').siblings().removeClass('active');
              $(this).parent('li').addClass('active');
    
    
              var new_image = $(this).find("img").attr('src');
    
              if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function() {
                  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                  $sidebar_img_container.fadeIn('fast');
                });
              }
    
              if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                $full_page_background.fadeOut('fast', function() {
                  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  $full_page_background.fadeIn('fast');
                });
              }
    
              if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
              }
            });
    
            $('.switch-sidebar-image input').change(function() {
              $full_page_background = $('.full-page-background');
    
              $input = $(this);
    
              if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                  $sidebar_img_container.fadeIn('fast');
                  $sidebar.attr('data-image', '#');
                }
    
                if ($full_page_background.length != 0) {
                  $full_page_background.fadeIn('fast');
                  $full_page.attr('data-image', '#');
                }
    
                background_image = true;
              } else {
                if ($sidebar_img_container.length != 0) {
                  $sidebar.removeAttr('data-image');
                  $sidebar_img_container.fadeOut('fast');
                }
    
                if ($full_page_background.length != 0) {
                  $full_page.removeAttr('data-image', '#');
                  $full_page_background.fadeOut('fast');
                }
    
                background_image = false;
              }
            });
    
            $('.switch-sidebar-mini input').change(function() {
              $body = $('body');
    
              $input = $(this);
    
              if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;
    
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    
              } else {
    
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
    
                setTimeout(function() {
                  $('body').addClass('sidebar-mini');
    
                  md.misc.sidebar_mini_active = true;
                }, 300);
              }
    
              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);
    
              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
    
            });
          });
        });
  </script>
  <script>
    $(document).ready(function () {
        $('.nav li a').click(function(e) {
            $('.nav li.active').removeClass('active');

            var $parent = $(this).parent();
            $parent.addClass('active');
        });
      });
  </script>
  <script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3200);
</script>
</body>
</html>