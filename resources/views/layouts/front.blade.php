<!DOCTYPE html>
<html lang="{{       $locale = App::currentLocale(); }}" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('backend/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-tag/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('backend/assets/plugins/summernote/css/summernote.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('backend/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('backend/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('backend/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    @if(App::isLocale('ar') )
    <link class="main-stylesheet" href="{{ asset('backend/pages/css/arabic-pages.css')}}" rel="stylesheet" type="text/css" />

   @elseif(App::isLocale('en'))
   <link class="main-stylesheet" href="{{ asset('backend/pages/css/pages.css')}}" rel="stylesheet" type="text/css" />

   @endif
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

   
    

  </head>
  <body class="fixed-header dashboard" >
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar" >
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu" >
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        {{-- <img src="assets/img/logo_white.png"
         alt="logo" class="brand" data-src="assets/img/logo_white.png" 
         data-src-retina="assets/img/logo_white_2x.png" width="78" height="22"> --}}
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="{{route('dashboard.dashboard.index' )}}" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>

          @if (Auth::user()->role =='admin')
              
       

          <li class="m-t-30 ">
            <a href="{{route('user.user.index' )}}" class="detailed">
              <span class="title">Users</span>
             </a>
            <span class="bg-success icon-thumbnail"><i class="fa fa-user"></i></span>
          </li>
          @endif
        
          <li>
            <a href="javascript:;"><span class="title">Catalog</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
            <ul class="sub-menu">
              @if (Auth::user()->role =='admin')
              <li class="">
                <a href="{{route('category.index')}}">Category </a>
                <span class="icon-thumbnail">CT</span>
              </li>
           
              <li class="">
                <a href="{{route('product.index')}}">Product</a>
                <span class="icon-thumbnail">PT</span>
              </li>
              @endif

              @if (Auth::user()->role =='vendor')
              <li class="">
                <a href="{{route('product.product.index')}}">Product</a>
                <span class="icon-thumbnail">PT</span>
              </li>
              @endif
            </ul>
          </li>


          <li>
            <a href="javascript:;"><span class="title">Language</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
            <ul class="sub-menu">
               <li class="">
                <a href="{{ url('lang/ar')}}">ARABIC </a>
                <span class="icon-thumbnail">AR</span>
              </li>
           
              <li class="">
                <a href="{{ url('lang/en')}}">ENGLISH</a>
                <span class="icon-thumbnail">EN</span>
              </li>
              

         
            </ul>
          </li>
        
         
        
          
          
          
         
        
        
         
         
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="inline brand ">
            <img src="{{asset('assets/img/efa/efalogo.png')}}"
             alt="logo" data-src="{{asset('assets/img/efa/efalogo.png')}}"
              data-src-retina="{{asset('assets/img/efa/efalogo.png')}}" width="78" >
          </div>
          <!-- START NOTIFICATION LIST -->
          <ul class="d-lg-inline-block d-none notification-list no-margin b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="inline p-r-10">
              <div class="dropdown">
                <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                  <span class="bubble"></span>
                </a>
                <!-- START Notification Dropdown -->
                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                  <!-- START Notification -->
                  <div class="notification-panel">
                    <!-- START Notification Body-->
                    <div class="notification-body scrollable">
                      <!-- START Notification Item-->
                      <div class="clearfix notification-item unread">
                        <!-- START Notification Item-->
                        <div class="heading open">
                          <a href="#" class="text-complete pull-left">
                            <i class="pg-map fs-16 m-r-10"></i>
                            <span class="bold">Carrot Design</span>
                            <span class="fs-12 m-l-10">Admin</span>
                          </a>
                          <div class="pull-right">
                            <div class="inline thumbnail-wrapper d16 circular m-t-15 m-r-10 toggle-more-details">
                              <div><i class="fa fa-angle-left"></i>
                              </div>
                            </div>
                            <span class=" time">few sec ago</span>
                          </div>
                          <div class="more-details">
                            <div class="more-details-inner">
                              <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                              <p class="small hint-text">
                                Commented on john Smiths wall.
                                <br> via pages framework.
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- START Notification Body-->
                      <!-- START Notification Item-->
                      <div class="clearfix notification-item">
                        <div class="heading">
                          <a href="#" class="text-danger pull-left">
                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                            <span class="bold">98% Server Load</span>
                            <span class="fs-12 m-l-10">Take Action</span>
                          </a>
                          <span class="pull-right time">2 mins ago</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="clearfix notification-item">
                        <div class="heading">
                          <a href="#" class="text-warning-dark pull-left">
                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                            <span class="bold">Warning Notification</span>
                            <span class="fs-12 m-l-10">Buy Now</span>
                          </a>
                          <span class="pull-right time">yesterday</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="clearfix notification-item unread">
                        <div class="heading">
                          <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a m-t-10 m-r-10">
                            <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
                          </div>
                          <a href="#" class="text-complete pull-left">
                            <span class="bold">Revox Design Labs</span>
                            <span class="fs-12 m-l-10">Owners</span>
                          </a>
                          <span class="pull-right time">11:00pm</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                    </div>
                    <!-- END Notification Body-->
                    <!-- START Notification Footer-->
                    <div class="text-center notification-footer">
                      <a href="#" class="">Read all notifications</a>
                      <a data-toggle="refresh" class="text-black portlet-refresh pull-right" href="#">
                        <i class="pg-refresh_new"></i>
                      </a>
                    </div>
                    <!-- START Notification Footer-->
                  </div>
                  <!-- END Notification -->
                </div>
                <!-- END Notification Dropdown -->
              </div>
            </li>
            <li class="inline p-r-10">
              <a href="#" class="header-icon pg pg-link"></a>
            </li>
            <li class="inline p-r-10">
              <a href="#" class="header-icon pg pg-thumbs"></a>
            </li>
          </ul>
          <!-- END NOTIFICATIONS LIST -->
          <a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
        </div>
        <div class="d-flex align-items-center">
          <!-- START User Info-->
          <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">

            @if(Auth::user()->role =='admin')
            <span class="semi-bold">Admin ({{ Auth::user()->first_name}})</span> <span class="text-master"></span>
       

           

            @elseif(Auth::user()->role =='vendor')
            <span class="semi-bold">Vendor ({{ Auth::user()->first_name}})</span> <span class="text-master"></span>
            @endif
       
          </div>
          <div class="dropdown pull-right d-lg-block d-none">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="inline thumbnail-wrapper d32 circular">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
              <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
              <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
              <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
              {{-- <a href="{{ route('login.index') }}" class="clearfix bg-master-lighter dropdown-item">
                <span class="pull-left">Logout</span>
    
              </a> --}}

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button  type="submit" class="clearfix bg-master-lighter dropdown-item">Logout</button>
                <span class="pull-right"><i class="pg-power"></i></span>
            </form>
            </div>
          </div>
          <!-- END User Info-->
          <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a>
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
  @yield('contents')
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
     
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->

    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
  
    <!-- END OVERLAY -->
   <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->








    @yield('scripts')
 
</html>