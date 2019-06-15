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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>

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
                <li><a href="{{url('/Service/Relaxation')}}">{{ trans('site.sub_service2.1') }}</a></li>
            @endif
            @if($service->type==3)
                <li><a href="{{url('/Service/Therapeutic')}}">{{ trans('site.sub_service3.1') }}</a></li>
            @endif
            <li><a href="#">{{ trans('site.'.$service->name) }}</a></li>
            @if($service->type==1)
                <script> var id_detail = 1; </script>
            @elseif($service->type==2)
                <script> var id_detail = 2; </script>
            @elseif($service->type==3)
                <script> var id_detail = 3; </script>
            @endif
        </ul>
    </div>
    <!-- /col-md-12 -->
    <!-- blog -->
    <div class="col-md-12">
        <!-- Blog page -->
        <div id="blog-container" class="col-md-8">
            <!-- Post Info -->
            <div class="post-info">
                <p><i class="far fa-calendar-plus"></i>{{ trans('site.post_on') }} {{ date('d/m/Y H:i:s', strtotime($service->created_at)) }}</p>
                {{-- <p><i class="fa fa-user"></i>by <a href="#">John Doe</a></p> --}}
                <!-- Post Comments -->
                {{-- <p><i class="fa fa-comment"></i>3 Comments</p> --}}
            </div>
            <!-- post-info -->
            <div class="blog-single post-main">
                <blockquote><span style="font-size: 1.4em">{{ trans('site.'.$service->name) }}</span></blockquote>
                <!-- Image -->
                @if(isset($service->image))
                    <img class="img-responsive" src="{{ asset('img/services/'.$service->image) }}" alt="">
                @endif
                @if(isset($service->image2))
                    <img class="img-responsive" src="{{ asset('img/services/'.$service->image2) }}" alt="">
                @endif
                @if(isset($service->image3))
                    <img class="img-responsive" src="{{ asset('img/services/'.$service->image3) }}" alt="">
                @endif
                <!-- Detail -->
                <div class="col-lg-12 margin3 marginb2">
                    <!-- Alert Info -->
                    <div class="alert alert-info col-md-12">
                        <strong>{{ trans('site.detail') }} </strong> {{ trans('site.'.$service->body) }}
                        <div class="col-12 margin2">
                            <div class="panel-group" id="accordion">
                                <!-- Price1 -->
                                @if(!($service->price1)==NULL)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h2 class="panel-title">
                                            <a style="color: #ffcb57;" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">{{ trans('site.Time1') }}</a>
                                        </h2>
                                    </div>
                                    <!-- /panel-heading -->
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <h6>
                                                {{ $service->price1 }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!--/panel -->
                                <!-- Price2 -->
                                @if(!($service->price2)==NULL)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h2 class="panel-title">
                                            <a style="color: #ffcb57;" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">{{ trans('site.Time2') }}</a>
                                        </h2>
                                    </div>
                                    <!-- /panel-heading -->
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <h6>
                                                {{ $service->price2 }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!--/panel -->
                                <!-- Price3 -->
                                @if(!($service->price3)==NULL)
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h2 class="panel-title">
                                            <a style="color: #ffcb57;" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">{{ trans('site.Time3') }}</a>
                                        </h2>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <h6>
                                                {{ $service->price3 }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!--/panel -->
                            </div>
                        </div>
                    </div>
                    <!--/alert -->
                </div>
                <div class="post-info marginb2">
                    <!-- Tags -->
                    <div class="blog-tags">
                        <p><i class="fa fa-tags"></i>Tags:</p>
                        @if($service->type==1)
                        <a href="{{url('/Service/Relaxation')}}">{{ trans('site.sub_service1') }}</a>
                        @endif
                        @if($service->type==2)
                        <a href="{{url('/Service/Relaxation')}}">{{ trans('site.sub_service2.1') }}</a>
                        @endif
                        @if($service->type==3)
                        <a href="{{url('/Service/Therapeutic')}}">{{ trans('site.sub_service3.1') }}</a>
                        @endif
                        {{-- <a href="#">Massage</a> <a href="#">Wellbeing</a> <a href="#">Experience</a> <a href="#">Hot
                            Stones</a> --}}
                    </div>
                </div>
                <!-- /post-info -->
                <div class="fb-comments" data-href="https://www.thaisiamsmile.com" data-width="auto" data-numposts="5"></div>
            </div>
            <!-- /blog-single -->
        </div>
        <!-- /blog-container col-md-8 -->
        <!-- Sidebar Column -->
        <div class="sidebar col-md-4">
            <div class="well">
                <h5 class="sidebar-header">{{ trans('site.service') }}</h5>
                <div class="row">
                    <ul class="custom">
                        <li><a href="{{url('/Service/Fusion')}}">{{ trans('site.sub_service1') }}</a>
                        </li>
                        <li><a href="{{url('/Service/Relaxation')}}">{{ trans('site.sub_service2') }}</a>
                        </li>
                        <li><a href="{{url('/Service/Therapeutic')}}">{{ trans('site.sub_service3') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /well -->
            <div class="well">
                <h5 class="sidebar-header">{{ trans('site.welcome') }}</h5>
                <div class="text-center">
                    <p>{{ trans('site.welcome_detail') }}</p>
                    <!-- Social Media icons -->
                    <div class="social-media ">
                            <a href="https://www.facebook.com/Siam-Smile-Thai-Massage-Lisboa-360120577962368/" title=""><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/thaisiamsmile/" title=""><i class="fab fa-instagram"></i></a>
                            <a href="https://th.tripadvisor.com/Attraction_Review-g189158-d17541745-Reviews-Siam_Smile_Thai_Massage-Lisbon_Lisbon_District_Central_Portugal.html" title=""><i class="fab fa-tripadvisor"></i></a>
                    </div>
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
<!-- Active menu -->
<script>
    document.getElementById("menu-services-all").style.color = "#ffcb57";
    if(id_detail===1){
        document.getElementById("menu-services-fusion").style.background = "#ffcb57";
        document.getElementById("menu-services-fusion").style.color = "#87271d";
    }
    if(id_detail===2){
        document.getElementById("menu-services-relaxation").style.background = "#ffcb57";
        document.getElementById("menu-services-relaxation").style.color = "#87271d";
    }
    if(id_detail===3){
        document.getElementById("menu-services-therapeutic").style.background = "#ffcb57";
        document.getElementById("menu-services-therapeutic").style.color = "#87271d";
    }
        
</script>
<!-- /container-fluid -->
@endsection
@section('script')
<!-- Bootstrap core & Jquery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
@endsection
