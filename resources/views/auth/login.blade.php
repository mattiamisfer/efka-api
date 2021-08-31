<!DOCTYPE html>
<html >

  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href="{{ asset('backend/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('backend/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    @if(App::isLocale('ar') )
    <link class="main-stylesheet" href="{{ asset('backend/pages/css/arabic-pages.css')}}" rel="stylesheet" type="text/css" />

   @elseif(App::isLocale('en'))
   <link class="main-stylesheet" href="{{ asset('backend/pages/css/pages.css')}}" rel="stylesheet" type="text/css" />

   @endif
       <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="{{ asset('backend/pages/css/windows.chrome.fix.css')}}" />'
    }
    </script>
  </head>
  <body class="fixed-header ">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="{{ asset('backend/assets/img/demo/bg.jpg')}}"
         data-src="{{ asset('backend/assets/img/demo/bg.jpg')}}"
          data-src-retina="{{ asset('backend/assets/img/demo/bg.jpg')}}" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="text-white bg-caption pull-bottom sm-pull-bottom p-l-20 m-b-20">
        
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="bg-white login-container">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="{{asset('assets/img/efa/efalogo.png')}}" alt="logo"
           data-src="{{asset('assets/img/efa/efalogo.png')}}"
           data-src-retina="{{asset('assets/img/efa/efalogo.png')}}" width="78" >
          <p class="p-t-35">{{ __('common.sigb_in_data')}}</p>
          @if (Session::has('failed'))
             <p class="p-t-35" style="color:red;">  {{ Session::get('failed') }}</p>
         
       @endif
          <!-- START Login Form -->
          <form id="form-login" class="p-t-15" role="form" action="{{ route('login') }}" method="POST">
            <!-- START Form Control-->
            @csrf
            <div class="form-group form-group-default">
              <label>{{ __('common.email')}}</label>
              <div class="controls">
                <input type="text" name="email" placeholder="User Name" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>{{ __('common.password')}}</label>
              <div class="controls">
                <input type="password" class="form-control" name="password" placeholder="Credentials" required>
              </div>
            </div>
            <!-- START Form Control-->
 

            
            <div class="row">
              <div class="col-md-6 no-padding sm-p-l-10">
                <div class="checkbox ">
              
                  <input    type="checkbox" value="1" id="checkbox1">

              
                  <label   for="checkbox1">{{ __('common.keep_me')}}</label>

                  
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-end">
                <a href="#" class="text-info small">{{ __('common.help_me')}}</a>
              </div>
            </div>
            <div class="row">
          
              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('register.forogt') }}
              </a>
          @endif
            </div>
    
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">{{ __('common.sign_me')}}</button>
          </form>
          <!--END Login Form-->
       
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="{{ asset('backend/assets/img/logo.png')}}" alt="logo" data-src="{{ asset('backend/assets/img/logo.png')}}" data-src-retina="{{ asset('backend/assets/img/logo_2x.png')}}" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="text-black close-icon-light overlay-close fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="bg-transparent no-border overlay-search" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="inline text-white thumbnail-wrapper d48 circular bg-success m-t-10">
                    <div>
                      <img width="50" height="50" src="{{ asset('backend/assets/img/profiles/avatar.jpg')}}" 
                      data-src="{{ asset('backend/assets/img/profiles/avatar.jpg')}}" 
                      data-src-retina="{{ asset('backend/assets/img/profiles/avatar2x.jpg')}}" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="inline p-l-10 p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="inline text-white thumbnail-wrapper d48 circular bg-success m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="inline p-l-10 p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="inline text-white thumbnail-wrapper d48 circular bg-success m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="inline p-l-10 p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="inline text-white thumbnail-wrapper d48 circular bg-info m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="inline p-l-10 p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="inline text-white thumbnail-wrapper d48 circular bg-complete m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="inline p-l-10 p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="inline text-white thumbnail-wrapper d48 circular bg-danger m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="inline p-l-10 p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="{{ asset('backend/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/select2/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/plugins/classie/classie.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="{{ asset('backend/pages/js/pages.min.js')}}"></script>
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>