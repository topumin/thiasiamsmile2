<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- page title -->
    <title>@yield('title')</title>
    <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
    @yield('css')
</head>
<!-- ==== body starts ==== -->
<body id="top">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- ===== Page Content ===== -->
    <div class="container-fluid">
        <!-- ===== Sidebar starts ===== -->
        <div id="sidebar" class="split col-md-2">
            <div class="affix-sidebar col-md-12">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <!-- collapse button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Logo -->
                            <div class="brand">
                                <a href="index.html">
                                    <img src="{{ asset('img/logo.png') }}" alt="" class="img-responsive center-block">
                                </a>
                            </div>
                            <!-- /brand -->
                        </div>
                        <!-- /navbar-header  -->
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav" id="sidenav01">
                                <li><a id="menu-home" href="{{url('/')}}">{{ trans('site.home') }}</a></li>
                                <li class="dropdown">
                                    <a id="menu-services-all" class="dropdown-toggle" data-toggle="dropdown" href="#">{{ trans('site.service') }}
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="aaa" id="menu-services-fusion" href="{{url('/Service/Fusion')}}">{{ trans('site.sub_service1') }}</a></li>
                                        <li><a id="menu-services-relaxation" href="{{url('/Service/Relaxation')}}">{{ trans('site.sub_service2.1') }}</a></li>
                                        <li><a id="menu-services-therapeutic" href="{{url('/Service/Therapeutic')}}">{{ trans('site.sub_service3.1') }}</a></li>
                                    </ul>
                                </li>
                                <li><a id="menu-package" href="{{url('/Package')}}">{{ trans('site.package') }}</a></li>
                                <li><a id="menu-contact" href="{{url('/Contact')}}">{{ trans('site.contact') }}</a></li>
                                <li>
                                    @if(session()->has('locale'))
                                        <a class="nav-link" href="{{ url('lang/' . ((session()->get('locale')=='en')?'pt':'en')) }}" class="btn"> {{ Str::upper((session()->get('locale')=='en')?'pt':'en') }} </a>
                                    @else
                                        <a class="nav-link" href="{{ url('lang/th') }}" class="btn"> PT </a>
                                    @endif

                                </li>
                            </ul>
                            <!-- navbar-nav -->
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/navbar -->
                </div>
                <!--/sidebar-nav -->
                <div class="navbar-info hidden-sm hidden-xs hidden-md">
                    <p class="small-text"><i class="fas fa-map-marker-alt margin-icon"></i>{{ trans('site.addrs') }}</p>
                    <p class="small-text"><i class="far fa-clock margin-icon"></i>{{ trans('site.open') }}<br />
                        {{ trans('site.open1') }}
                        <br> {!! trans('site.tel') !!} </p>
                    <!--Social icons -->
                    <div class="social-media ">
                        <a href="#" title=""><i class="fab fa-facebook"></i></a>
                        <a href="#" title=""><i class="fab fa-instagram"></i></a>
                        <a href="#" title=""><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
                <!-- /navbar-info -->
            </div>
            <!-- /affix-sidebar  -->
        </div>
        <!-- ===== / sidebar ends ===== -->
        @yield('content')

        @yield('script')
</body>
</html>
