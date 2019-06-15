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
                    <ul class="nav nav-tabs col-md-12  margin1" id="myTab">
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
                                    <div class="col-md-6">
                                        <!-- menu body -->
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Haircut
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $50
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Scalp Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $70
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Colouring
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $120
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Styling or Straightening
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $60
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                    <!-- Second Row -->
                                    <div class="col-md-6">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Eyebrow Design
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $32
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Fake Lashes Aplication
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $40
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Facial Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $80
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Laser Treatment
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $200
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab1 -->
                            <!--Tab Content 2 -->
                            <div class="tab-pane fade" id="tab2">
                                <!-- Prices: Skin & Body -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-6">
                                        <!-- menu body -->
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Haircut
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $50
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Scalp Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $70
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Colouring
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $120
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Styling or Straightening
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $60
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                    <!-- Second Row -->
                                    <div class="col-md-6">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Eyebrow Design
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $32
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Fake Lashes Aplication
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $40
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Facial Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $80
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Laser Treatment
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $200
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab2 -->
                            <!-- Tab Content 3 -->
                            <div class="tab-pane fade" id="tab3">
                                <!-- Prices: Wellbeing -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-6">
                                        <!-- menu body -->
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Haircut
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $50
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Scalp Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $70
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Colouring
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $120
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Styling or Straightening
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $60
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                    <!-- Second Row -->
                                    <div class="col-md-6">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Eyebrow Design
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $32
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Fake Lashes Aplication
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $40
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Facial Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $80
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Laser Treatment
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $200
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                </div>
                                <!-- /prices-main -->
                            </div>
                            <!-- /#tab3 -->
                            <!-- #tab4 -->
                            <div class="tab-pane fade in" id="tab4">
                                <!-- Prices: Hair & Face -->
                                <div class="prices-main">
                                    <!-- First Row -->
                                    <div class="col-md-6">
                                        <!-- menu body -->
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Haircut
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $50
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Scalp Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $70
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Colouring
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $120
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Styling or Straightening
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $60
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
                                    <!-- Second Row -->
                                    <div class="col-md-6">
                                        <div class="menu-body">
                                            <div class="menu-section">
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Eyebrow Design
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $32
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Fake Lashes Aplication
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $40
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Facial Massage
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $80
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                                <!-- Item starts -->
                                                <div class="menu-item">
                                                    <div class="menu-item-name">
                                                        Laser Treatment
                                                    </div>
                                                    <div class="menu-item-price">
                                                        $200
                                                    </div>
                                                    <div class="menu-item-description">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                                                    </div>
                                                </div>
                                                <!-- Item ends -->
                                            </div>
                                            <!--/ menu section -->
                                        </div>
                                        <!-- / menu body -->
                                    </div>
                                    <!-- /col-md-6 -->
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
