@extends('layouts.default')
@section('title', 'One Stop for your Web Needs')

@section('content')
<!-- Slider Revolution -->
<div class="tp-banner-container">
    <div class="tp-banner-fullwidth">
        <ul>
            <li data-transition="fade" data-slotamount="7"
                data-masterspeed="200"
                data-thumb="images/sliders/homeslider_thumb3.jpg"
                data-saveperformance="on" data-title="Slide 1">
                <!-- MAIN IMAGE --> <img src="images/sliders/dummy.png"
                                         alt="slidebg1" data-lazyload="images/sliders/home-slide-1.png"
                                         data-bgposition="top center" data-kenburns="on"
                                         data-duration="2000" data-ease="Power0.easeInOut"
                                         data-bgfit="115" data-bgfitend="100"
                                         data-bgpositionend="right bottom"> <!-- LAYER NR. 1 -->
                <div
                    class="tp-caption rev_title_e bold upper rev_color2 lfb customout tp-resizeme rs-parallaxlevel-0 text-center"
                    data-x="center" data-y="200"
                    data-customout="x:0;y:-100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endeasing="Power4.easeIn" data-speed="800" data-start="800"
                    data-easing="Power4.easeInOut" data-splitin="none"
                    data-splitout="none" data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                    <span class="rev_color1 bold">CONNECT.</span> HIRE<br> 
                    <span class="rev_color4 bold">IMPLEMENT.</span> SAVE
                </div> <!-- img 1 - 2 - 3 -->

            </li>
            <!-- SLIDE  -->
            <li data-transition="slideup" data-slotamount="2"
                data-masterspeed="500"
                data-thumb="images/sliders/homeslider_thumb1.jpg"
                data-saveperformance="on" data-title="Slide 2">
                <!-- MAIN IMAGE --> <img src="images/sliders/revolution/dummy.png"
                                         alt="slidebg1" data-lazyload="images/sliders/home-slide-2.png"
                                         data-bgposition="left top" data-kenburns="on"
                                         data-duration="2000" data-ease="Power0.easeInOut"
                                         data-bgfit="115" data-bgfitend="100"
                                         data-bgpositionend="right bottom"> <!-- LAYER NR. 1 --> <!-- LAYER NR. 2 -->
                <div
                    class="tp-caption oswald_font rev_title_e upper rev_color2 lfb customout tp-resizeme rs-parallaxlevel-2"
                    data-x="center" data-y="170"
                    data-customout="x:0;y:-100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endspeed="700" data-endeasing="Power4.easeIn"
                    data-speed="800" data-start="800" data-easing="easeOutQuad"
                    data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                    <span class="rev_color4 bold">RAMP</span> <span class="bold">UP</span>
                </div> <!-- LAYER NR. 3 -->
                <div
                    class="tp-caption oswald_font rev_title_e upper rev_color2 lfb customout tp-resizeme rs-parallaxlevel-2"
                    data-x="center" data-y="250"
                    data-customout="x:0;y:-200;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endspeed="1000" data-endeasing="Power4.easeIn"
                    data-speed="800" data-start="1100" data-easing="easeOutQuad"
                    data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                    Your Project Deliver Dates</div>

            </li>
            <!-- SLIDE  -->
            <li data-transition="random" data-slotamount="7"
                data-masterspeed="500"
                data-thumb="images/sliders/homeslider_thumb2.jpg"
                data-saveperformance="on" data-title="Slide 3">
                <!-- MAIN IMAGE --> <img src="images/sliders/revolution/dummy.png"
                                         alt="slidebg1" data-lazyload="images/sliders/home-slide-3.png"
                                         data-bgposition="left top" data-bgfit="cover"
                                         data-bgrepeat="no-repeat"> <!-- LAYERS --> <!-- Device 1 -->


                <div
                    class="tp-caption oswald_font rev_title_a rev_color2 sfr tp-resizeme rs-parallaxlevel-2"
                    data-x="450" data-y="200" data-speed="800" data-start="1300"
                    data-easing="easeOutQuad" data-endeasing="Power4.easeIn"
                    data-endspeed="1000" data-splitin="none" data-splitout="none"
                    data-elementdelay="0.1" data-endelementdelay="0.1"
                    style="z-index: 10;">
                    <span class="upper">GENERATE MEASURABLE SAVINGS</span>
                </div> <!-- LAYER NR. 3 -->
                <div
                    class="tp-caption rev_title_aa rev_color3 sfr tp-resizeme rs-parallaxlevel-2"
                    data-x="450" data-y="300" data-speed="800" data-start="1800"
                    data-easing="easeOutQuad" data-endeasing="Power4.easeIn"
                    data-endspeed="1000" data-splitin="none" data-splitout="none"
                    data-elementdelay="0.1" data-endelementdelay="0.1">Start
                    your internet global Business with askforWEB</div>


            </li>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<!-- End Slider Revolution -->

<!-- Intro Banner -->
<div class="welcome_banner full_banner_colored">
    <div class="content clearfix">
        <h3>Looking to Start your online presense!</h3>
        <a href="#" target="_self" class="btn_a f_right"> <span><i
                    class="in_left ico-cart"></i><span>Request Quote</span><i
                    class="in_right ico-cart"></i></span>
        </a> <span class="intro_text">There are many variations of
            passages of Lorem Ipsum available, but the majority have suffered
            alteration in some form, by injected humour of this randomised
            words which don't look even slightly believable If you are going to
            use a passage of Lorem Ipsum.</span>
        <span class="rotate_icon"><i class="ico-phone"></i></span>
    </div>
</div>
<!-- End Intro Banner -->

<!-- Icon Boxes Style 1 A -->
<section class="content_section">
    <div class="container icons_spacer">
        <div class="main_title centered upper">
            <h2>
                <span class="line"><span class="dot"></span></span>Our Services
            </h2>
        </div>
        <div class="icon_boxes_con style1 circle clearfix">
            <div class="col-md-3">
                <div class="service_box">
                    <span class="icon"><i class="ico-embed2"></i></span>
                    <div class="service_box_con centered">
                        <h3>Web Development</h3>
                        <span class="desc">There are many variations of demo text
                            passed sages of Lorem Ipsum available the majority.</span> <a href="#"
                                                                                      class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service_box">
                    <span class="icon"><i class="color1 ico-images"></i></span>
                    <div class="service_box_con centered">
                        <h3>Design & Multimedia</h3>
                        <span class="desc">There are many variations of demo text
                            passed sages of Lorem Ipsum available the majority.</span> <a href="#"
                                                                                      class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service_box">
                    <span class="icon"><i class="color2 ico-mobile4"></i></span>
                    <div class="service_box_con centered">
                        <h3>Mobile Development</h3>
                        <span class="desc">There are many variations of demo text
                            passed sages of Lorem Ipsum available the majority.</span> <a href="#"
                                                                                      class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service_box">
                    <span class="icon"><i class="color3 ico-user-tie"></i></span>
                    <div class="service_box_con centered">
                        <h3>Dedidated Hiring</h3>
                        <span class="desc">There are many variations of demo text
                            passed sages of Lorem Ipsum available the majority.</span> <a href="#"
                                                                                      class="ser-box-link"><span></span>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Icon Boxes Style 1 A -->

<!-- Features Box 1 -->
<section class="content_section bg_fixed white_section bg1">
    <div class="bg_overlay">
        <div class="content no_padding clearfix">
            <div class="col-md-6 row_spacer">
                <h2 class="title2">
                    <span class="red"><i class="ico-globe3"></i></span>Unique And
                    Modern Design
                </h2>
                <p>Lorem Ipsum is simply dummy text of the printing and
                    typeseting industry Lorem in text Ipsum has been the industry
                    standar dummyy text ever since the when an iunesi known printer
                    of took a galley of type.</p>
                <p>and scrambled it to make a typea specimen book There are
                    many variations of the paes sages the Lorem Ipsum available, but
                    the majority have to suffered alteration iner some form with
                    injected randomised words which.</p>
                <ul class="list1 black list_circle clearfix">
                    <li>Multiple Layout</li>
                    <li>Awesome Shortcodes</li>
                    <li>Browser Compatibility</li>
                    <li>Easy to Edit Animations</li>
                    <li>Parallax Effect</li>
                    <li>Responsive Design</li>
                    <li>Many Home Page Versions</li>
                    <li>Many Blog Pages</li>
                </ul>
                <div>
                    <a class="btn_b white_btn italic" href="#"> <span
                            class="hidden_element" data-text="Purchase Now">Purchase
                            Now</span>
                    </a> <a class="btn_b italic" href="#"> <span
                            class="hidden_element" data-text="Read More">Read More</span>
                    </a>
                </div>
            </div>
            <div class="has_col_img on_desktop">
                <img class="" src="images/tab1.png" alt="Image Description">
            </div>
        </div>
    </div>
</section>
<!-- End Features Box 1 -->

<!-- Tabs 1 -->
<section class="content_section bg_gray border_t_n">
    <div class="content row_spacer">
        <div class="main_title centered upper">
            <h2>
                <span class="line"><span class="dot"></span></span>Why Choose Us?
            </h2>
        </div>
        <div class="hm-tabs tabs2 upper_title">
            <nav class="clearfix">
                <ul class="tabs-navi">
                    <li><a data-content="vission" class="selected" href="#"><span><i
                                    class="ico-star3"></i></span>Vission</a></li>
                    <li><a data-content="mession" href="#"><span><i
                                    class="ico-heart6"></i></span>Mession</a></li>
                    <li><a data-content="goals" href="#"><span><i
                                    class="ico-paperplane"></i></span>Goals</a></li>
                    <li><a data-content="solutions" href="#"><span><i
                                    class="ico-bulb"></i></span>Solutions</a></li>
                </ul>
                <!-- tabs-navi -->
            </nav>

            <ul class="tabs-body">
                <li data-content="vission" class="selected clearfix">

                    <div class="tab_img">
                        <a class="magnific-popup img_popup" href="images/home2.jpg">
                            <span><i class="ico-maximize"></i></span> <img
                                class="popup_img" src="images/home2.jpg" alt="vission">
                        </a>
                    </div>
                    <h6>Our Vission</h6>
                    <p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum recusandae rem animi accusamus quisquam
                        reprehenderit sed voluptates, numquam, quibusdam velit dolores
                        repellendus tempora corrupti accusantium obcaecati voluptate
                        totam eveniet laboriosam?</p>

                    <p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum recusandae rem animi accusamus quisquam
                        reprehenderit sed voluptates, numquam, quibusdam velit dolores
                        repellendus tempora corrupti accusantium obcaecati voluptate
                        totam eveniet laboriosam?</p>
                </li>

                <li data-content="mession">
                    <p>New Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Non a voluptatibus, ex odit totam cumque nihil eos
                        asperiores ea, labore rerum. Doloribus tenetur quae impedit
                        adipisci, laborum dolorum eaque ratione quaerat, eos dicta
                        consequuntur atque ex facere voluptate cupiditate incidunt.</p>

                    <p>New Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Non a voluptatibus, ex odit totam cumque nihil eos
                        asperiores ea, labore rerum. Doloribus tenetur quae impedit
                        adipisci, laborum dolorum eaque ratione quaerat, eos dicta
                        consequuntur atque ex facere voluptate cupiditate incidunt.</p>
                </li>

                <li data-content="goals">
                    <p>Gallery Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Cumque tenetur aut, cupiditate, libero eius
                        rerum incidunt dolorem quo in officia.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A ipsa vero, culpa doloremque voluptatum consectetur mollitia,
                        atque expedita unde excepturi id, molestias maiores delectus
                        quos molestiae. Ab iure provident adipisci eveniet quisquam
                        ratione libero nam inventore error pariatur optio facilis
                        assumenda sint atque cumque, omnis perspiciatis. Maxime minus
                        quam voluptatum provident aliquam voluptatibus vel rerum. Soluta
                        nulla tempora aspernatur maiores! Animi accusamus officiis neque
                        exercitationem dolore ipsum maiores delectus asperiores
                        reprehenderit pariatur placeat, quaerat sed illum optio qui enim
                        odio temporibus, nulla nihil nemo quod dicta consectetur
                        obcaecati vel. Perspiciatis animi corrupti quidem fugit
                        deleniti, atque mollitia labore excepturi ut.</p>
                </li>

                <li data-content="solutions">
                    <p>Store Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Earum recusandae rem animi accusamus quisquam
                        reprehenderit sed voluptates, numquam, quibusdam velit dolores
                        repellendus tempora corrupti accusantium obcaecati voluptate
                        totam eveniet laboriosam?</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Eligendi, enim, pariatur. Ab assumenda, accusantium! Consequatur
                        magni placeat quae eos dicta, cum expedita sunt facilis est
                        impedit possimus dolorum sequi nostrum nobis sit praesentium
                        molestias nulla laudantium fugit corporis nam ut saepe harum
                        ipsam? Debitis accusantium, omnis repudiandae modi, distinctio
                        illo voluptatibus aperiam odio veritatis, quam perferendis eaque
                        ullam. Temporibus tempore ad voluptates explicabo ea sit
                        deleniti ipsum quos dolores tempora odio, ab corporis molestiae,
                        eaque optio, perferendis! Cumque libero quia modi! Totam magni
                        rerum id iusto explicabo distinctio, magnam, labore sed nemo
                        expedita velit quam, perspiciatis non temporibus sit minus
                        voluptatum. Iste, cumque sunt suscipit facere iusto asperiores,
                        ullam dolorum excepturi quidem ea quibusdam deserunt illo.
                        Nesciunt voluptates repellat ipsam.</p>
                </li>

            </ul>
            <!-- Tabs Content -->
        </div>
        <!-- End Tabs Container -->
    </div>
</section>
<!-- End Tabs 1 -->

<!-- Clients 1 -->
<section class="content_section white_section bg_color3">
    <div class="content row_spacer clearfix">
        <div class="our_client_slider">
            <div class="c_logo">
                <img src="images/clients/logo7.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo8.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo9.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo10.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo11.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo12.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo7.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo8.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo9.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo10.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo11.png" alt="client name">
            </div>
            <div class="c_logo">
                <img src="images/clients/logo12.png" alt="client name">
            </div>
        </div>
    </div>
</section>
<!-- End Clients 1 -->

<!-- Contact Us -->
<section class="content_section">
    <div class="content row_spacer no_padding">
        <div class="main_title centered upper">
            <h2>
                <span class="line"><span class="dot"></span></span>Contact Us
            </h2>
        </div>
        <div class="rows_container clearfix">
            <div class="col-md-6">
                <h2 class="title1 upper">
                    <i class="ico-pencil5"></i>Contact Information
                </h2>
                <span class="spacer40"></span>

                <div class="contact_details_row clearfix">
                    <span class="icon"> <i class="ico-location5"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Address</span> <span class="c_detail">
                            <span class="c_name">Main Office :</span> <span class="c_desc">18/2,
                                Netaji Subhash Road, Budge Budge, Kolkata, W.B, India</span>
                        </span> <span class="c_detail"> <span class="c_name">Customer
                                Center :</span> <span class="c_desc">Site 160, 13th Cross,
                                Maruthi Layout, Virupakshapura, Bangalore, KA, India</span>
                        </span>
                    </div>
                </div>

                <div class="contact_details_row clearfix">
                    <span class="icon"> <i class="ico-bubble4"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Phone Numbers</span> <span
                            class="c_detail"> <span class="c_name">Main
                                Office :</span> <span class="c_desc">+91 90192 93167</span>
                        </span> <span class="c_detail"> <span class="c_name">Customer
                                Support :</span> <span class="c_desc">+91 76761 93639</span>
                        </span> <span class="c_detail"> <span class="c_name">Sales
                                :</span> <span class="c_desc">+91 99021 28296</span>
                        </span>
                    </div>
                </div>

                <div class="contact_details_row clearfix">
                    <span class="icon"> <i class="ico-paperplane"></i>
                    </span>
                    <div class="c_con">
                        <span class="c_title">Email Address</span> <span
                            class="c_detail"> <span class="c_name">Customer
                                support :</span> <span class="c_desc">cs@askforweb.com</span>
                        </span> <span class="c_detail"> <span class="c_name">Technical
                                support :</span> <span class="c_desc">support@askforweb.com</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h2 class="title1 upper">
                    <i class="ico-envelope3"></i>Get On Touch
                </h2>
                <span class="spacer40"></span>
                <form class="hm_contact_form" method="post">
                    <div class="form_row clearfix">
                        <label> <span class="hm_field_name">Name</span> <span
                                class="hm_requires_star">*</span>
                        </label> <input class="hm_input_text" type="text" name="name"
                                        placeholder="Your Name">
                    </div>
                    <div class="form_row clearfix">
                        <label> <span class="hm_field_name">Email</span> <span
                                class="hm_requires_star">*</span>
                        </label> <input class="hm_input_text" type="text" name="mail"
                                        placeholder="mail@sitename.com">
                    </div>
                    <div class="form_row clearfix">
                        <label> <span class="hm_field_name">Subject</span>
                        </label> <input class="hm_input_text" type="text" name="subject"
                                        placeholder="Your Purpose">
                    </div>
                    <div class="form_row clearfix">
                        <label> <span class="hm_field_name">Message</span>
                        </label>
                        <textarea class="hm_textarea" name="message"></textarea>
                    </div>
                    <div class="form_row clearfix">
                        <button type="submit" name="send"
                                class="send_button full_button">
                            <i class="ico-check3"></i> <span>Send Your Message</span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Us -->
@endsection