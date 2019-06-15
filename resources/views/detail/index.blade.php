@extends('layouts.master')
@section('title')
Siam Smile Thai Massage - Detail
@endsection
@section('css')
<!-- Font files -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i%7CLato:400,700" rel="stylesheet">
<link href="{{ asset('fonts/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('fonts/fontawesome/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">
<!-- Fav icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
<!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- style CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- plugins CSS -->
<link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
<!-- Colors CSS -->
<link href="{{ asset('styles/maincolors.css') }}" rel="stylesheet">
<!-- Prefix free -->
<script src="{{ asset('js/prefixfree.min.js') }}"></script>
@endsection
@section('content')
<!-- ===== content starts  ===== -->
<div id="content" class="col-md-10 split pages">
    <div class="blog-head col-md-12 text-center">
        <!-- Heading -->
        <h1>{{ trans('site.'.$service->name) }}</h1>
        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">{{ trans('site.home') }}</a></li>
            @if($service->type==1)
            <li><a href="{{url('/Service/Fusion')}}">{{ trans('site.sub_service1') }}</a></li>
            @endif
            @if($service->type==2)
            <li><a href="{{url('/Service/Therapeutic')}}">{{ trans('site.sub_service2.1') }}</a></li>
            @endif
            @if($service->type==3)
            <li><a href="{{url('/Service/Therapeutic')}}">{{ trans('site.sub_service3.1') }}</a></li>
            @endif
            <li class="active">{{ trans('site.'.$service->name) }}</li>
        </ul>
    </div>
    <!-- /col-md-12 -->
    <!-- blog -->
    <div class="col-md-12">
        <!-- Blog page -->
        <div id="blog-container" class="col-md-8">
            <!-- Post Info -->
            <div class="post-info">
                <p><i class="fa fa-clock-o"></i>Posted on Aug 24, 2018 at 9:00 PM</p>
                {{-- <p><i class="fa fa-user"></i>by <a href="#">John Doe</a></p> --}}
                <!-- Post Comments -->
                {{-- <p><i class="fa fa-comment"></i>3 Comments</p> --}}
            </div>
            <!-- post-info -->
            <div class="blog-single post-main">
                <!-- Image -->
                <img class="img-responsive" src="{{ asset('img/services/'.$service->image) }}" alt="">
                <img class="img-responsive" src="{{ asset('img/services/'.$service->image2) }}" alt="">
                <img class="img-responsive" src="{{ asset('img/services/'.$service->image3) }}" alt="">
                <img class="img-responsive" src="{{ asset('img/services/'.$service->image4) }}" alt="">
                <!-- Post Content -->
                <blockquote>{{ trans('site.'.$service->name) }}</blockquote>
                <p>{{ trans('site.'.$service->body) }}</p>
                <div class="post-info">
                    <!-- Tags -->
                    <div class="blog-tags">
                        <p><i class="fa fa-tags"></i>Tags:</p>
                        @if($service->type==1)
                        <a href="#">{{ trans('site.sub_service1') }}</a>
                        @endif
                        @if($service->type==2)
                        <a href="#">{{ trans('site.sub_service2.1') }}</a>
                        @endif
                        @if($service->type==3)
                        <a href="#">{{ trans('site.sub_service3.1') }}</a>
                        @endif
                        {{-- <a href="#">Massage</a> <a href="#">Wellbeing</a> <a href="#">Experience</a> <a href="#">Hot
                            Stones</a> --}}
                    </div>
                </div>
                <!-- /post-info -->
            </div>
            <!-- /blog-single -->
        </div>
        <!-- /blog-container col-md-8 -->
        <!-- Sidebar Column -->
        <div class="sidebar col-md-4">
            <!-- About us Widget -->
            <div class="well">
                <h5 class="sidebar-header">About Us</h5>
                <div class="text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                        accusamus laudantium.</p>
                    <!-- Social Media icons -->
                    <div class="social-media ">
                        <a href="#" title=""><i class="fab fa-twitter"></i></a>
                        <a href="#" title=""><i class="fab fa-facebook"></i></a>
                        <a href="#" title=""><i class="fab fa-google-plus"></i></a>
                        <a href="#" title=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- /well -->
            <!-- Blog Categories -->
            <div class="well">
                <h5 class="sidebar-header">Categories</h5>
                <div class="row">
                    <ul class="custom">
                        <li><a href="#">Our Story</a>
                        </li>
                        <li><a href="#">Events and News</a>
                        </li>
                        <li><a href="#">Offers</a>
                        </li>
                        <li><a href="#">Our Spa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /well -->
        </div>
        <!-- /sidebar col-md-3 -->
    </div>
    <!-- /col-md-12-->
</div>
<!-- /content -->
</div>
<!-- /container-fluid -->
@endsection
@section('script')
<!-- Active menu -->
<script>
    document.getElementById("menu-services-all").style.color = "#ffcb57";

</script>
<!-- Bootstrap core & Jquery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
@endsection
