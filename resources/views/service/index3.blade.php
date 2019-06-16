@extends('layouts.master')
@section('title')
    Siam Smile Thai Massage - Therapeutic Massage
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
<div id="content" class="col-md-10 split">
    <!-- ===== About section starts  ===== -->
    <div id="aboutus">
        <div class="content-wrapper">
            <div class="content-box container">
                <div class="inside-wrapper container">
                    <!-- section-heading -->
                    <div class="section-heading">
                        <h2>{{ trans('site.our_service') }}</h2>
                    </div>
                    <!-- /section-heading -->
                    <div class="row">
                        <!-- image -->
                        <div class="col-md-6">
                            <img class="img-responsive img-paragraph center-block" src="{{ asset('img/services/service4.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h4>{{ trans('site.TSS') }}</h4>
                            <p style="text-align: justify; text-indent: 20px">{{ trans('site.our_service_detail') }}</p>
                            <p style="text-align: justify; text-indent: 20px">{{ trans('site.our_service_detail2') }}</p>
                            <ul class="custom pl-0">
                                <li>{{ trans('site.sub_service1') }}</li>
                                <li>{{ trans('site.sub_service2') }}</li>
                                <li>{{ trans('site.sub_service3') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row margin1">
                        <!-- featured box 1 -->
                        <div class="col-md-4">
                            <div class="serviceBox">
                                <!-- featured icon -->
                                <div class="service-icon">
                                    <i class="flaticon-massage-spa-body-treatment"></i>
                                </div>
                                <!-- feature content -->
                                <div class="service-content">
                                    <h5>{{ trans('site.sub_service1') }}</h5>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-4  -->
                        <!-- featured box 2 -->
                        <div class="col-md-4">
                            <div class="serviceBox">
                                <!-- featured icon -->
                                <div class="service-icon">
                                    <i class="flaticon-relaxing-spa-ornaments"></i>
                                </div>
                                <!-- feature content -->
                                <div class="service-content">
                                    <h5>{{ trans('site.sub_service2.1') }}</h5>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-4  -->
                        <!-- featured box 3 -->
                        <div class="col-md-4">
                            <div class="serviceBox">
                                <!-- featured icon -->
                                <div class="service-icon">
                                    <i class="flaticon-spa"></i>
                                </div>
                                <!-- feature content -->
                                <div class="service-content">
                                    <h5>{{ trans('site.sub_service3.1') }}</h5>
                                </div>
                            </div>
                        </div>
                        <!--/col-md-4 -->
                    </div>
                    <!--/row -->
                </div>
                <!--/ inside-wrapper  -->
                <div class="bg-color1 col-md-12">
                    <div class="inside-wrapper container">
                        <h3 class="text-center text-light no-margin-top">{{ trans('site.sub_service3') }}</h3>
                        <!-- Team carousel -->
                        <div id="owl-team" class="owl-carousel owl-theme margin1">
                            @foreach ($services as $service)
                            <figure class="col-lg-12 team">
                                <!-- image -->
                                @if($service->type==3)
                                    <img src="{{ asset('img/services/'.$service->image) }}" class="img-fluid" alt="" />
                                @endif
                                <!-- social icons -->
                                <div class="icons">
                                    {{-- <a href="#"><i class="fa fa-envelope"></i></a> --}}
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=thaisiamsmile.com"> <i class="fab fa-facebook-f"></i></a>
                                    {{-- <a href="#"> <i class="fab fa-instagram"></i></a> --}}
                                </div>
                                <!-- caption -->
                                <figcaption>
                                    <h4><a class="h4-title" href="{{ url('Service/Detail/'.$service->id) }}" title="{{ trans('site.'.$service->name) }}">{{ trans('site.'.$service->name) }}</a></h4>
                                    <h6><span>{{trans('site.price_sa')}}</span> {{ $service->price1 }}</h6>
                                    <p class="p-detail"> {{ trans('site.'.$service->body) }} </p>
                                </figcaption>
                            </figure>
                            @endforeach
                        </div>
                        <!-- /owl-carousel -->
                    </div>
                    <!-- /inside-wrapper -->
                </div>
                <!-- /bg-color1-->
                <div class="col-md-12">
                    <div class="inside-wrapper container">
                        <div class="col-md-8 col-md-offset-2">
                            <h3 class="text-center">{{ trans('site.our_cus_say') }}</h3>
                            <!-- Testimonial carousel-->
                            <div id="owl-testimonial" class="margin1 owl-carousel owl-theme">
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="content">
                                        <p class="description">
                                            On a recent trip to Lisbon I ended up needing a massage as I have bad hips. I had looked up Siam Smile Thai Massage and was most happy with my hour-long massage. It was a great help and the staff was welcoming despite me not having made a booking ahead. My masseur was very thorough and helpful!!! Definitely recommend this special haven of peace and healing!!
                                        </p>
                                    </div>
                                    <!-- /content -->
                                    <div class="testimonial-pic">
                                        <img src="{{ asset('img/team/team1.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <!-- /testimonial-pic -->
                                    <div class="testimonial-review">
                                        <h6 class="testimonial-title">Elsa Mendonca Pinto</h6>
                                        <span>Lawyer</span>
                                    </div>
                                    <!-- /testimonial-review -->
                                </div>
                                <!-- /testimonial -->
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="content">
                                        <p class="description">
                                           I came here with my husband on a kids free day, to enjoy some grown up time. We were greeted by Ann and Lee taken care of individually. Ann gave me a therapeutic massage and it was simply stunning. Wonderful lady with magic hands. See you again soon and thank you so much.
                                        </p>
                                    </div>
                                    <!-- /content -->
                                    <div class="testimonial-pic">
                                        <img src="{{ asset('img/team/team2.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <!-- /testimonial-pic -->
                                    <div class="testimonial-review">
                                        <h6 class="testimonial-title">Melanie S. Kimwald</h6>
                                        <span>Teacher</span>
                                    </div>
                                    <!-- /testimonial-review -->
                                </div>
                                <!-- /testimonial -->
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="content">
                                        <p class="description">
                                            On a recent trip to Lisbon I ended up needing a massage as I have bad hips. I had looked up Siam Smile Thai Massage and was most happy with my hour-long massage. It was a great help and the staff was welcoming despite me not having made a booking ahead. My masseur was very thorough and helpful!!! Definitely recommend this special haven of peace and healing!!
                                        </p>
                                    </div>
                                    <!-- /content -->
                                    <div class="testimonial-pic">
                                        <img src="{{ asset('img/team/team3.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <!-- /testimonial-pic -->
                                    <div class="testimonial-review">
                                        <h6 class="testimonial-title">Elsa Mendonca Pinto</h6>
                                        <span>Lawyer</span>
                                    </div>
                                    <!-- /testimonial-review -->
                                </div>
                                <!-- /testimonial -->
                            </div>
                            <!-- /owl-testimonial -->
                        </div>
                        <!-- /col-md-8 -->
                    </div>
                    <!-- /inside-wrapper -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /content-box -->
        </div>
        <!-- / content-wrapper -->
    </div>
    <!-- /about us ends -->
</div>
<!-- /content -->
</div>
<!-- /container-fluid -->
@endsection
@section('script')
<script>
    document.getElementById("menu-services-all").style.color = "#ffcb57";
    document.getElementById("menu-services-therapeutic").style.background = "#ffcb57";
    document.getElementById("menu-services-therapeutic").style.color = "#87271d";
</script>
<!-- Bootstrap core & Jquery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
@endsection
