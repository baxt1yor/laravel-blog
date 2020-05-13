@php
    use App\Feedback;

    $new_message = Feedback::unreaded()->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="/dashboard/img/favicon.ico">

  <title>{{ env('APP_NAME', 'Sayt') }}</title>

  <!-- Bootstrap /dashboard/css -->
  <link href="/dashboard/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="/dashboard/css/bootstrap-theme.css" rel="stylesheet">
  <!--external /dashboard/css-->
  <!-- font icon -->
  <link href="/dashboard/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="/dashboard/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar /dashboard/css-->
  <link href="/dashboard/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="/dashboard/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="/dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="/dashboard/css/owl.carousel.css" type="text/css">
  <link href="/dashboard/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/dashboard/css/fullcalendar.css">
  <link href="/dashboard/css/widgets.css" rel="stylesheet">
  <link href="/dashboard/css/style.css" rel="stylesheet">
  <link href="/dashboard/css/style-responsive.css" rel="stylesheet" />
  <link href="/dashboard/css/xcharts.min.css" rel=" stylesheet">
  <link href="/dashboard/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips"  data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="{{route('admin.posts.index')}}" class="logo">{{ env('APP_NAME', 'Sayt') }} <span class="lite">Boshqaruv bo'limi</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">{{count($new_message)}}</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">Sizga kelgan {{count($new_message)}} xabarlar</p>
              </li>
              <li>
                @foreach ($new_message as $item)
                  <a href="{{route('admin.feedback.show', $item->id)}}">
                    <span class="photo"><img alt="avatar" src="/dashboard/img/user.jpg"></span>
                    <span class="subject">
                    <span class="from">{{$item->name}}</span>
                    <span class="time">{{$item->created_at->format('H:i')}}</span>
                    </span>
                    <span class="message">
                        {{$item->subject}}
                    </span>
                </a>
                @endforeach
              </li>
             
              
              <li>
                <a href="{{route('admin.feedback.index')}}">Barcha xabarlar</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/dashboard/img/avatar-mini2.jpg">
                            </span>
                            <span class="username">{{auth()->user()->name}}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="{{route('admin.profile.index')}}"><i class="icon_profile"></i>Hisobot sozlamalari</a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout')}}">
                  @csrf
                  <button type="submit" class="btn btn-primary " style="width:100%">Chiqish</button>
                </form>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="{{request()->is('admin/posts') ? 'active' : ''}}">
            <a class="" href="{{route('admin.posts.index')}}">
              <i class="icon_house_alt"></i>
              <span>{{ env('APP_NAME', 'Sayt') }}</span>
            </a>
          </li>
          <li class="{{request()->is('admin/cooks') ? 'active' : ''}}">
            <a class="" href="{{route('admin.cooks.index')}}">
              <i class="fa fa-cutlery"></i>
              <span>Oshpazlar</span>
            </a>
          </li> 

          <li class="{{request()->is('admin/feedbacks') ? 'active' : ''}}">
            <a href="{{route('admin.feedback.index')}}" class="">
              <i class="fa fa-envelope-o"></i>
              <span>Xabarlar</span>
            </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="icon_documents_alt"></i>
                <span>Pages</span>
                <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{route('admin.posts.index')}}">Home</a></li>
                <li><i class="fa fa-laptop"></i>Dashboard</li>
              </ol>
            </div>
          </div>
          <!--/.row-->
  
            @yield('content')
        
          

          <script src="/dashboard/js/jquery.js"></script>
          <script src="/dashboard/js/jquery-ui-1.10.4.min.js"></script>
          <script src="/dashboard/js/jquery-1.8.3.min.js"></script>
          <script type="text/javascript" src="/dashboard/js/jquery-ui-1.9.2.custom.min.js"></script>
          <!-- bootstrap -->
          <script src="/dashboard/js/bootstrap.min.js"></script>
          <!-- nice scroll -->
          <script src="/dashboard/js/jquery.scrollTo.min.js"></script>
          <script src="/dashboard/js/jquery.nicescroll.js" type="text/javascript"></script>
          <!-- charts scripts -->
          <script src="/dashboard/assets/jquery-knob/js/jquery.knob.js"></script>
          <script src="/dashboard/js/jquery.sparkline.js" type="text/javascript"></script>
          <script src="/dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
          <script src="/dashboard/js/owl.carousel.js"></script>
          <!-- jQuery full calendar -->
           <script src="/dashboard/js/fullcalendar.min.js"></script>
            <!-- Full Google Calendar - Calendar -->
            <script src="/dashboard/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
            <!--script for this page only-->
            <script src="/dashboard/js/calendar-custom.js"></script>
            <script src="/dashboard/js/jquery.rateit.min.js"></script>
            <!-- custom select -->
            <script src="/dashboard/js/jquery.customSelect.min.js"></script>
            <script src="/dashboard/assets/chart-master/Chart.js"></script>
        
            <!--custome script for all page-->
            <script src="/dashboard/js/scripts.js"></script>
            <!-- custom script for this page-->
            <script src="/dashboard/js/sparkline-chart.js"></script>
            <script src="/dashboard/js/easy-pie-chart.js"></script>
            <script src="/dashboard/js/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="/dashboard/js/jquery-jvectormap-world-mill-en.js"></script>
            <script src="/dashboard/js/xcharts.min.js"></script>
            <script src="/dashboard/js/jquery.autosize.min.js"></script>
            <script src="/dashboard/js/jquery.placeholder.min.js"></script>
            <script src="/dashboard/js/gdp-data.js"></script>
            <script src="/dashboard/js/morris.min.js"></script>
            <script src="/dashboard/js/sparklines.js"></script>
            <script src="/dashboard/js/charts.js"></script>
            <script src="/dashboard/js/jquery.slimscroll.min.js"></script>
            
        </body>
        
        </html>