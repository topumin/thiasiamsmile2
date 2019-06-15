@extends('layouts.master')
@section('title')
    Siam Smile Thai Massage - Home
@endsection
@section('css')
<!-- Font files -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i%7CLato:400,700" rel="stylesheet">
<link href="fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
<link href="fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
<!-- Fav icons -->
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- style CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- plugins CSS -->
<link href="css/plugins.css" rel="stylesheet">
<!-- Colors CSS -->
<link href="styles/maincolors.css" rel="stylesheet">
<!-- Prefix free -->
<script src="js/prefixfree.min.js"></script>
@endsection
@section('content')

<!-- ===== content starts  ===== -->
<div id="content" class="col-md-10 split">
    <!-- ===== Home section starts  ===== -->
    <div id="home">
        <div class="slideshow">
            <!-- Ken Burns - Images path on CSS file -->
            <div class="slideshow-image"><img src="img/slideshow/herb.jpg" alt=""></div>
            <div class="slideshow-image"><img src="img/slideshow/coco.jpg" alt=""></div>
            <div class="slideshow-image"><img src="img/slideshow/massage.jpg" alt=""></div>
            <div class="slideshow-image"><img src="img/slideshow/bed.jpg" alt=""></div>
        </div>
        <!-- /slideshow -->
        <div class="content-wrapper">
            <div class="content-box home text-center container">
                <div class="inside-wrapper home col-md-12">
                    <!-- welcome text -->
                    <h1>{{ trans('site.welcome') }}</h1>
                    <h2 class="slogan">"{{ trans('site.slow_gan') }}"</h2>
                    <p class="lead">{{ trans('site.welcome_detail') }}</p>
                    <!-- Buttons -->
                    <a class="btn btn-primary" href="{{ url('/Contact') }}">{{ trans('site.contact_us') }}</a> 
                    {{-- <a class="btn btn-primary"href="{{ url('/Contact') }}">More info</a> --}}
                </div>
                <!-- /inside-wrapper -->
            </div>
            <!-- /content-box -->
        </div>
        <!-- /content-wrapper -->
    </div>
    <!-- /home section ends -->
</div>
<!-- /content -->
</div>
<!-- /container-fluid -->
@endsection
@section('script')
<!-- Active menu -->
<script>
    document.getElementById("menu-home").style.color = "#ffcb57";
</script>
<!-- Bootstrap core & Jquery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>
@endsection
