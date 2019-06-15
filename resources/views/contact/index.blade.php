@extends('layouts.master')
@section('title')
    Siam Smile Thai Massage - Contact
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
    <!-- ===== Contact section starts  ===== -->
    <div id="contact">
        <div class="content-wrapper">
            <div class="content-box container">
                <div class="inside-wrapper container">
                    <!-- section-heading -->
                    <div class="section-heading">
                        <h2>{{ trans('site.contact_us') }}</h2>
                    </div>
                    <!-- /section-heading -->
                    <div class="col-md-10 col-md-offset-1">
                        <!-- contact info -->
                        <div class="contact-info">
                            <!-- Form Starts -->
                            <div id="contact_form">
                                <div class="form-group">
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>{{ trans('site.name') }}<span class="required">*</span></label>
                                            <input type="text" name="name" class="form-control input-field" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{ trans('site.email') }}<span class="required">*</span></label>
                                            <input type="email" name="email" class="form-control input-field"
                                                required="">
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>{{ trans('site.subject') }}</label>
                                            <input type="text" name="subject" class="form-control input-field">
                                        </div>
                                        <div class="col-md-12">
                                            <label>{{ trans('site.massage') }}<span class="required">*</span></label>
                                            <textarea name="message" id="message" class="textarea-field form-control"
                                                rows="3" required=""></textarea>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">{{ trans('site.send_massage') }}</button>
                                </div>
                                <!-- Contact results -->
                                <div id="contact_results"></div>
                            </div>
                            <!-- /contact-form -->
                        </div>
                        <!-- /contact-info -->
                    </div>
                    <!-- /col-md-10 -->
                </div>
                <!-- /inside-wrapper-->
                <div class="bg-color1 col-md-12">
                    <div class="inside-wrapper container">
                        <!-- map-->
                        <div id="map-canvas"></div>
                    </div>
                    <!-- /inside-wrapper -->
                </div>
                <!-- /bg-color1 -->
                <div class="col-md-12 margin1">
                    <div class="inside-wrapper container">
                        <div class="col-md-4">
                            <div class="contact-icon">
                                <!---icon-->
                                <i class="fa fa-globe top-icon"></i>
                                <!-- contact-icon info-->
                                <div class="contact-icon-info">
                                    <h6>{{ trans('site.contact_social') }}</h6>
                                    <p>{{ trans('site.contact_social_sub_facebook') }} <a href="https://www.facebook.com/Siam-Smile-Thai-Massage-Lisboa-360120577962368/" title="Siam Smile Thai Massage Lisboa">Siam Smile Thai</a></p>
                                    <p>{{ trans('site.contact_social_sub_instagram') }} <a href="https://www.instagram.com/thaisiamsmile/" title="thaisiamsmile">thaisiamsmile</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- /contact-icon-->
                        <div class="col-md-4">
                            <div class="contact-icon">
                                <!---icon-->
                                <i class="fab fa-tripadvisor top-icon"></i>
                                <!-- contact-icon info-->
                                <div class="contact-icon-info">
                                    <h6>{{ trans('site.contact_tripadvisor') }}</h6>
                                    <p>{{ trans('site.contact_tripadvisor_sub_account') }}</p>
                                    <p><a href="https://th.tripadvisor.com/Attraction_Review-g189158-d17541745-Reviews-Siam_Smile_Thai_Massage-Lisbon_Lisbon_District_Central_Portugal.html" title="Siam Smile Thai Massage">Siam Smile Thai Massage</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- /contact-icon-->
                        <div class="col-md-4">
                            <div class="contact-icon">
                                <!---icon-->
                                <i class="fa fa-phone top-icon"></i>
                                <!-- contact-icon info -->
                                <div class="contact-icon-info">
                                    <h6>{{ trans('site.contact_phone') }}</h6>
                                    <p>{{ trans('site.contact_phone_sub_number') }}</p>
                                    <p><a href="tel:351911962809">(+351) 911 962 809</a></p>
                                </div>
                            </div>
                            <!-- /contact-icon-->
                        </div>
                        <!-- /col-md-4-->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /content-box -->
        </div>
        <!-- /content-wrapper -->
    </div>
    <!-- /contact ends -->
</div>
<!-- /content -->
</div>
<!-- /container-fluid -->
@endsection
@section('script')
<!-- Active menu -->
<script>
    document.getElementById("menu-contact").style.color = "#ffcb57";
</script>
<!-- Bootstrap core & Jquery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="js/custom.js"></script>
<script src="js/plugins.js"></script>
<!-- Open Street maps -->
<script src="js/map.js"></script>
<!-- Contact Form script -->
<script src="js/contact.js"></script>
@endsection