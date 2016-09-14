@extends('layouts.default')
@section('title', 'Contact Us')
@section('content')
<!-- Page Title -->
<section class="content_section white_section page_title has_bg_image bg_header4 enar_parallax">
    <div class="content clearfix">
        <h1 class="">Contacts Us</h1>
        <div class="breadcrumbs">
            <a href="#">Home</a>
            <span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
            <a href="#">Pages</a>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Contact Us -->
<section class="content_section">
    <div class="content row_spacer no_padding">	
        <div class="rows_container clearfix">
            <div class="col-md-6">
                <h2 class="title1 upper"><i class="ico-pencil5"></i>Contact Information</h2>
                <div class="contact_details_row clearfix">
                    <span class="icon">
                        <i class="ico-location5"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Address</span>
                        <span class="c_detail">
                            <span class="c_name">Main Office :</span>
                            <span class="c_desc">NO.28 - 23 Street Name - City, Country</span>
                        </span>
                        <span class="c_detail">
                            <span class="c_name">Customer Center :</span>
                            <span class="c_desc">NO.123 - 45 Street Name - City, Country</span>
                        </span>
                    </div>
                </div>

                <div class="contact_details_row clearfix">
                    <span class="icon">
                        <i class="ico-bubble4"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Phone Numbers</span>
                        <span class="c_detail">
                            <span class="c_name">Main Office :</span>
                            <span class="c_desc">+000 123 456 789</span>
                        </span>
                        <span class="c_detail">
                            <span class="c_name">Customer Support :</span>
                            <span class="c_desc">+000 456 123 978</span>
                        </span>
                        <span class="c_detail">
                            <span class="c_name">Sales :</span>
                            <span class="c_desc">+000 123 456 789</span>
                        </span>
                    </div>
                </div>

                <div class="contact_details_row clearfix">
                    <span class="icon">
                        <i class="ico-paperplane"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Email Address</span>
                        <span class="c_detail">
                            <span class="c_name">Customer support :</span>
                            <span class="c_desc">info@mail.com</span>
                        </span>
                        <span class="c_detail">
                            <span class="c_name">Technical support :</span>
                            <span class="c_desc">support@mail.com</span>
                        </span>
                    </div>
                </div>

                <div class="contact_details_row clearfix">
                    <span class="icon">
                        <i class="ico-pen2"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Other Datails</span>
                        <span class="c_detail">
                            <span class="c_name">Site Name :</span>
                            <span class="c_desc">www.ideal-theme.com</span>
                        </span>
                    </div>
                </div>
            </div><!-- Grid -->

            <div class="col-md-6">
                <h2 class="title1 upper"><i class="ico-envelope3"></i>Get On Touch</h2>
                <form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="php/phpmailer/sendemail.php" method="post">
                    <div class="form_row clearfix">
                        <label for="contact-us-name">
                            <span class="hm_field_name">Name</span>
                            <span class="hm_requires_star">*</span>
                        </label>
                        <input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required>
                    </div>
                    <div class="form_row clearfix">
                        <label for="contact-us-mail">
                            <span class="hm_field_name">Email</span>
                            <span class="hm_requires_star">*</span>
                        </label>
                        <input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
                    </div>
                    <div class="form_row clearfix">
                        <label for="contact-us-phone">
                            <span class="hm_field_name">Phone</span>
                        </label>
                        <input class="form_fill_fields hm_input_text" type="text" name="contact-us-phone" id="contact-us-phone">
                    </div>
                    <div class="form_row clearfix">
                        <label for="contact-us-subject">
                            <span class="hm_field_name">Subject</span>
                        </label>
                        <input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject">
                    </div>
                    <div class="form_row clearfix">
                        <label for="contact-us-option">
                            <span class="hm_field_name">Services</span>
                        </label>
                        <label class="orderby_label">
                            <select class="form_fill_fields shipping_country" id="contact-us-option" name="contact-us-option">
                                <option value="">Select One ---</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Wordpress">Wordpress</option>
                                <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                            </select>
                        </label>
                    </div>
                    <div class="form_row clearfix">
                        <label for="contact-us-message">
                            <span class="hm_field_name">Message</span>
                            <span class="hm_requires_star">*</span>
                        </label>
                        <textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required></textarea>
                    </div>
                    <div class="form_row clearfix">
                        <button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
                            <i class="ico-check3"></i>
                            <span>Send Your Message</span>
                        </button>
                    </div>
                    <div class="form_row clearfix">
                        <div id="form-messages"></div>
                    </div>
                    <div class="form_loader"></div>
                </form>
            </div><!-- Grid -->
        </div>
    </div>
</section>
<!-- End Contact Us -->

<!-- Google Map -->
<section class="content_section">
    <div class="title_banner t_b_color1 upper centered">
        <div class="content">
            <h2>Our Location</h2>
        </div>
    </div>
    <div class="bordered_content">
        <div class="google_map" data-lat="-12.043333" data-long="-77.028333" data-main="yes" data-text="Your location description 2">
            <span class="location" data-lat="-12.040397656836609" data-long="-77.03373871559225" data-text="Your sub location description 1"></span>
            <span class="location" data-lat="-12.050047116528843" data-long="-77.02448169303511" data-text="Your sub location description 2"></span>
        </div>
    </div>
</section>
<!-- End Google Map -->
@endsection