@extends('layouts.default')
@section('title', 'About Us')
@section('content')
<section class="content_section white_section page_title has_bg_image bg_header1 enar_parallax">
    <div class="content clearfix">
        <h1 class="">About Us</h1>
        <div class="breadcrumbs">
            <a href="#">Home</a>
            <span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
            <a href="#">About</a>
            <span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
            <a href="#">About Company</a>
        </div>
    </div>
</section>
<section class="content_section">
    <div class="container icons_spacer">
        <div class="main_title centered upper">
            <h2><span class="line"><span class="dot"></span></span>Our Goals</h2>
        </div>
        <div class="icon_boxes_con style1 circle upper_title just_icon_border solid_icon clearfix">
            <div class="col-md-4">
                <div class="service_box">
                    <span class="icon"><i class="ico-tools-2"></i></span>
                    <div class="service_box_con centered">
                        <h3>Super Coding</h3>
                        <span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
                        <a href="#" class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_box">
                    <span class="icon"><i class="ico-mobile4"></i></span>
                    <div class="service_box_con centered">
                        <h3>Best User Interface</h3>
                        <span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
                        <a href="#" class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_box">
                    <span class="icon"><i class="ico-key4"></i></span>
                    <div class="service_box_con centered">
                        <h3>Easy to Customize</h3>
                        <span class="desc">There are many variations of demo text passed sages of Lorem Ipsum available the majority.</span>
                        <a href="#" class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection