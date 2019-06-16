@extends('layouts.master')
@section('title')
    Siam Smile Thai Massage - Package
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
    <!-- ===== Prices section starts  ===== -->
    <div id="prices">
        <div class="content-wrapper">
            <div class="content-box container">
                <div class="inside-wrapper container">
                    <!-- section-heading -->
                    <div class="section-heading">
                        <h2>{{ trans('site.our_package') }}</h2>
                    </div>
                    <!-- /section-heading -->
                    <!-- Navigation -->
                    <ul class="nav nav-tabs col-md-12 margin1 marginb5" id="myTab">
                        <li class="active col-md-5 text-center">
                            <a href="#tab1" data-toggle="tab">
                                <img class="img-responsive img-circle img-price" src="{{ asset('img/prices/package_a.jpg') }}" alt="">
                                {{ trans('site.pack_a') }}
                            </a>
                        </li>
                        <li class="col-md-5 text-center">
                            <a href="#tab2" data-toggle="tab">
                                <img class="img-responsive img-circle img-price" src="{{ asset('img/prices/package_b.jpg') }}" alt="">
                                {{ trans('site.pack_b') }}
                            </a>
                        </li>
                        <li class="col-md-5 text-center">
                            <a href="#tab3" data-toggle="tab">
                                <img class="img-responsive img-circle img-price" src="{{ asset('img/prices/package_c.jpg') }}"alt="">
                                {{ trans('site.pack_c') }}
                            </a>
                        </li>
                        <li class="col-md-5 text-center">
                            <a href="#tab4" data-toggle="tab">
                                <img class="img-responsive img-circle img-price" src="{{ asset('img/prices/package_d.jpg') }}" alt="">
                                {{ trans('site.pack_d') }}
                            </a>
                        </li>
                    </ul>
                    <!-- Price tabs Start -->
                    <div class="tabbable">
                        <div class="tab-content">
                            <!--Tab Content 1 -->
                            <div class="tab-pane fade active in" id="tab1">
                                <!-- Prices: Hair & Face -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-12">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <div class="col-lg-12">
                                                    <!-- Alert Info -->
                                                    <div class="alert alert-info col-md-12">
                                                        <strong style="font-size: 2em;">{{ trans('site.detail2') }}: {{ trans('site.package2') }} A</strong>
                                                        <p class="margin3" style="font-weight: 700;">{{ trans('site.package_a_header') }}</p>
                                                        <div class="menu-item" style="padding-right: 20px; padding-left: 20px">
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc2') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc3') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc5') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc9') !!} </span>
                                                            </div>
                                                        </div>
                                                        <!-- Collapse -->
                                                        <div class="panel-group" id="accordion">
                                                            <!-- Option1 -->
                                                            <div class="panel">
                                                                <div class="panel-heading">
                                                                    <h2 class="panel-title">
                                                                        <a style="color: #ffcb57;" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1A">{{ trans('site.option1') }}</a>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapse1A" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <h6>
                                                                            {{ trans('site.price') }} 200 EUR
                                                                            <br>
                                                                            {{ trans('site.package_valid_3') }}        
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/Option1 -->
                                                        </div>
                                                        <!-- /Collapse -->
                                                    </div>
                                                    <!--/alert -->
                                                </div>
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                    </div>
                                    <!-- /col-md-12 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab1 -->
                            <!--Tab Content 2 -->
                            <div class="tab-pane fade" id="tab2">
                                <!-- Prices: Hair & Face -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-12">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <div class="col-lg-12">
                                                    <!-- Alert Info -->
                                                    <div class="alert alert-info col-md-12">
                                                        <strong style="font-size: 2em;">{{ trans('site.detail2') }}: {{ trans('site.package2') }} B</strong>
                                                        <p class="margin3" style="font-weight: 700;">{{ trans('site.package_b_header') }}</p>
                                                        <div class="menu-item" style="padding-right: 20px; padding-left: 20px">
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc6') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc7') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc8') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc10') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc11') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc12') !!} </span>
                                                            </div>
                                                        </div>
                                                        <!-- Collapse -->
                                                        <div class="panel-group" id="accordion">
                                                            <!-- Option1 -->
                                                            <div class="panel">
                                                                <div class="panel-heading">
                                                                    <h2 class="panel-title">
                                                                        <a style="color: #ffcb57;" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1B">{{ trans('site.option1') }}</a>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapse1B" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <h6>
                                                                            {{ trans('site.price') }} 225 EUR
                                                                            <br>
                                                                            {{ trans('site.package_b_header_1') }}
                                                                            <br>
                                                                            {{ trans('site.package_valid_3') }}        
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/Option1 -->
                                                            <!-- Option2 -->
                                                            <div class="panel">
                                                                <div class="panel-heading">
                                                                    <h2 class="panel-title">
                                                                        <a style="color: #ffcb57;" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2B">{{ trans('site.option2') }}</a>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapse2B" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <h6>
                                                                            {{ trans('site.price') }} 300 EUR
                                                                            <br>
                                                                            {{ trans('site.package_b_header_2') }}
                                                                            <br>
                                                                            {{ trans('site.package_valid_3') }}     
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/Option2 -->      
                                                        </div>
                                                        <!-- /Collapse -->
                                                    </div>
                                                    <!--/alert -->
                                                </div>
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                    </div>
                                    <!-- /col-md-12 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab2 -->
                            <!--Tab Content 3 -->
                            <div class="tab-pane fade" id="tab3">
                                <!-- Prices: Hair & Face -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-12">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <div class="col-lg-12">
                                                    <!-- Alert Info -->
                                                    <div class="alert alert-info col-md-12">
                                                        <strong style="font-size: 2em;">{{ trans('site.detail2') }}: {{ trans('site.package2') }} C</strong>
                                                        <p class="margin3" style="font-weight: 700;">{{ trans('site.package_c_header') }}</p>
                                                        <div class="menu-item" style="padding-right: 20px; padding-left: 20px">
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc3') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc5') !!} </span>
                                                            </div>
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc10') !!} </span>
                                                            </div>
                                                        </div>
                                                        <!-- Collapse -->
                                                        <div class="panel-group" id="accordion">
                                                            <!-- Option1 -->
                                                            <div class="panel">
                                                                <div class="panel-heading">
                                                                    <h2 class="panel-title">
                                                                        <a style="color: #ffcb57;" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1C">{{ trans('site.option1') }}</a>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapse1C" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <h6>
                                                                            {{ trans('site.price') }} 105 EUR
                                                                            <br>
                                                                            {{ trans('site.package_valid_1') }}       
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/Option1 -->
                                                        </div>
                                                        <!-- /Collapse -->
                                                    </div>
                                                    <!--/alert -->
                                                </div>
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                    </div>
                                    <!-- /col-md-12 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab3 -->
                             <!--Tab Content 4 -->
                            <div class="tab-pane fade" id="tab4">
                                <!-- Prices: Hair & Face -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-12">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <div class="col-lg-12">
                                                    <!-- Alert Info -->
                                                    <div class="alert alert-info col-md-12">
                                                        <strong style="font-size: 2em;">{{ trans('site.detail2') }}: {{ trans('site.package2') }} D</strong>
                                                        <p class="margin3" style="font-weight: 700;">{{ trans('site.package_d_header') }}</p>
                                                        <div class="menu-item" style="padding-right: 20px; padding-left: 20px">
                                                            <div class="menu-item-name  margin2">
                                                                <i class="flaticon-spa"></i> &nbsp&nbsp <span style="font-weight: 300 !important;font-size: 14px !important;"> {!!  trans('site.itemc3') !!} </span>
                                                            </div>
                                                        </div>
                                                        <!-- Collapse -->
                                                        <div class="panel-group" id="accordion">
                                                            <!-- Option1 -->
                                                            <div class="panel">
                                                                <div class="panel-heading">
                                                                    <h2 class="panel-title">
                                                                        <a style="color: #ffcb57;" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1D">{{ trans('site.option1') }}</a>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapse1D" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <h6>
                                                                            {{ trans('site.price') }} 150 EUR
                                                                            <br>
                                                                            {{ trans('site.package_valid_1') }}     
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/Option1 -->
                                                        </div>
                                                        <!-- /Collapse -->
                                                    </div>
                                                    <!--/alert -->
                                                </div>
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                    </div>
                                    <!-- /col-md-12 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab4 -->
                        </div>
                        <!--tab-content-->
                    </div>
                    <!--tababble-->
                </div>
                <!-- /inside-wrapper -->
            </div>
            <!-- /content-box -->
        </div>
        <!-- / content-wrapper -->
    </div>
    <!-- /prices ends -->
</div>
<!-- /content -->
</div>
<!-- /container-fluid -->
@endsection
@section('script')
<!-- Active menu -->
<script>
    document.getElementById("menu-package").style.color = "#ffcb57";
</script>
<!-- Bootstrap core & Jquery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>
@endsection
