<?php
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            echo "<script>alert('Sent! You will get a feedback as soon as possible')</script>";
            break;
        
        case 'fail':
            echo "<script>alert('Failed! Try Again')</script>";
            break;
        
        default:
            # code...
            break;
    }
}


?>
<!DOCTYPE html>
<html class="scheme_original" lang="en-US">
<head>
    <title>Xceed Africa</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,300italic,400,400italic,500,500italic,600,600italic,700,700italic%7CLora:300,300italic,400,400italic,500,500italic,600,600italic,700,700italic&#038;subset=latin,latin-ext&#038;" media="all" property="stylesheet" rel="stylesheet" type="text/css">
    <link href='css/fontello/css/fontello.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/instagram/sb-instagram.min.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/essgrid/ess-grid.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/revslider/rev-slider.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/woocommerce/woocommerce.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='css/style.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='css/colors.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/woocommerce/woocommerce-layout.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/woocommerce/plugin.woocommerce.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='css/animation.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='css/shortcodes.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='css/messages.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/magnific-popup/magnific-popup.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='js/vendor/swiper/swiper.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href='css/responsive.css' media='all' property="stylesheet" rel='stylesheet' type='text/css'>
    <link href="images/favi.png" rel="icon" sizes="192x192">
</head>
<body class="body_style_wide body_filled scheme_original top_panel_show top_panel_over sidebar_hide sidebar_outer_show sidebar_outer_yes top_panel_fixed">
    <div id="page_preloader"></div>
    <div class="body_wrap">
        <div class="page_wrap">
            <header class="top_panel_wrap top_panel_style_3 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_over">
                    <div class="top_panel_top">
                        <div class="content_wrap">
                            <div class="top_panel_top_contact_area icon-location-light">
                                254 Street Avenue, Los Angeles, LA 2415 US.
                            </div>
                            <div class="top_panel_top_open_hours icon-clock-light">
                                Mon - Fri : 09:00 - 17:00
                            </div>
                            <div class="top_panel_top_ophone icon-call-out">
                                8 800 256 35 87
                            </div>
                            <div class="top_panel_top_user_area cart_show">
                                <div class="menu_pushy_wrap">
                                    <a class="menu_pushy_button icon-1460034782_menu2" href="#"></a>
                                </div>
                                <ul class="menu_user_nav" id="menu_user">
                                    <li class="menu_user_register_login">
                                        <a class="popup_link popup_login_link icon-key-light" href="#">Apply</a> <a> </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="contact_logo">
                                <div class="logo">
                                    <a href="index.html"><img alt="" class="logo_main" src="images/logo_dark.png"> <img alt="" class="logo_fixed" src="images/logo.png"></a>
                                </div>
                            </div>
                            <div class="menu_main_wrap">
                                <nav class="menu_main_nav_area menu_hover_fade">
                                    <ul class="menu_main_nav" id="menu_main">
                                        <!-- <li class="menu-item current-menu-ancestor current-menu-parent">
                                            <a href="index.html"><span>Home</span></a>
                                        </li> -->
                                        <li class="menu-item">
                                            <a href="#our-team"><span>Team</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#about-us"><span>About Us</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#our-services"><span>Services</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#company"><span>Company</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#all-posts"><span>Blog</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#our_portfolio"><span>Portfolio</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#contact_us"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav>
                                
                                <div class="top_panel_top_socials top_panel_el">
                                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                                        <div class="sc_socials_item">
                                            <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="menu_pushy_nav_area pushy pushy-left scheme_dark">
                <div class="pushy_inner">
                    <a class="close-pushy" href="#"></a>
                    <div class="sidebar_outer widget_area scheme_dark">
                        <div class="sidebar_outer_inner widget_area_inner">
                            <div class="sidebar_outer_widgets">
                                <aside class="widget widget_socials">
                                    <h5 class="widget_title">About Us</h5>
                                    <div class="widget_inner">
                                        <div class="logo_descr">
                                            We are a team of industry experts with many years of experience in venture capital, technology startups, artificial intelligence.<br>
                                            <br>
                                            <ul class="sc_list sc_list_style_iconed custom_cl_1">
                                                <li class="sc_list_item"><span class="sc_list_icon icon-location-light custom_cl_2"></span>Los Angeles, Street Avenue, La 2540</li>
                                                <li class="sc_list_ite"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: 800-123-4567</li>
                                                <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: invetex@yoursite.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="site-overlay"></div>
            <div class="header_mobile header_mobile_style_3">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="index.html"><img alt="" class="logo_main" src="images/logo_dark.png"></a>
                    </div>
                    
                </div>
                <div class="side_wrap">
                    <div class="close">
                        Close
                    </div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                            <ul class="menu_main_nav" id="menu_mobile">
                                <!-- <li class="menu-item current-menu-ancestor current-menu-parent">
                                    <a href="index.html"><span>Home</span></a>
                                </li> -->
                                <li class="menu-item">
                                    <a href="#our-team"><span>Team</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#about-us"><span>About Us</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#our-services"><span>Services</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#company"><span>Company</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#all-posts"><span>Blog</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#our_portfolio"><span>Portfolio</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#contact_us"><span>Contact</span></a>
                                </li>
                            </ul>
                        </nav>
                        
                        <div class="login">
                            <a class="popup_link popup_register_link icon-pencil" href="#popup_registration">Apply</a>
                        </div>
                    </div>
                    <!-- <div class="panel_middle">
                        <div class="contact_field contact_phone">
                            <span class="contact_icon icon-call-out"></span> <span class="contact_label contact_phone">8 800 256 35 87</span>
                        </div>
                        <div class="top_panel_top_open_hours icon-clock-light">
                            Mon - Fri : 09:00 - 17:00
                        </div>
                        <div class="top_panel_top_user_area cart_hide">
                            <div class="menu_pushy_wrap">
                                <a class="menu_pushy_button icon-1460034782_menu2" href="#"></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="panel_bottom">
                        <div class="contact_socials">
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                <div class="sc_socials_item">
                                    <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                                </div>
                                <div class="sc_socials_item">
                                    <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                                </div>
                                <div class="sc_socials_item">
                                    <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                                </div>
                                <div class="sc_socials_item">
                                    <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="mask"></div>
            </div>
            <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
                <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_1_1_wrapper">
                    <div class="rev_slider fullscreenbanner" data-version="5.2.6" id="rev_slider_1_1">
                        <ul>
                            <li data-description="" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1" data-masterspeed="default,default,default,default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0,0,0,0" data-saveperformance="off" data-slotamount="default,default,default,default" data-thumb="images/1920x1079-100x50.jpg" data-title="Slide" data-transition="slidingoverlayup,slidingoverlaydown,slidingoverlayright,slidingoverlayleft">
                                <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" height="1079" src="images/Xceed1.jpg" title="Xceed1" width="1920">
                                <div class="tp-caption trx-big tp-resizeme" data-end="8700" data-height="['auto']" data-hoffset="" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:600;" data-voffset="-40" data-width="['auto']" data-x="center" data-y="center" id="slide-1-layer-1">
                                    Empowering African Startups
                                </div>
                                <div class="tp-caption trx-norm tp-resizeme" data-end="8700" data-height="['auto']" data-hoffset="" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:600;" data-voffset="46" data-width="['auto']" data-x="center" data-y="center" id="slide-1-layer-2">
                                    Xceed Africa provides strategic funding to early-stage African startups solving hard problems <br> and building high growth businesses in $Billion markets.
                                </div>
                                <div class="tp-caption trx-no-css tp-resizeme" data-end="8700" data-height="['auto']" data-hoffset="" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:600;" data-voffset="137" data-width="['auto']" data-x="center" data-y="center" id="slide-1-layer-3">
                                    <a class="sc_button sc_button_style_filled sc_button_size_medium" href="#about-us">Read more</a>&nbsp;&nbsp;
                                    <!-- <a class="sc_button sc_button_style_filled2 sc_button_size_medium light_color" href="#">Purchase</a> -->
                                </div>
                            </li>
                            <li data-description="" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-2" data-masterspeed="default,default,default,default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0,0,0,0" data-saveperformance="off" data-slotamount="default,default,default,default" data-thumb="images/1920x1076-100x50.jpg" data-title="Slide" data-transition="slidingoverlayright,slidingoverlayleft,slidingoverlayup,slidingoverlaydown">
                                <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" height="1076" src="images/Xceed2.jpg" title="Xceed2" width="1920">
                                <div class="tp-caption trx-big tp-resizeme" data-end="8700" data-height="['auto']" data-hoffset="" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:600;" data-voffset="-40" data-width="['auto']" data-x="center" data-y="center" id="slide-2-layer-1">
                                    Transforming African Businesses
                                </div>
                                <div class="tp-caption trx-norm tp-resizeme" data-end="8700" data-height="['auto']" data-hoffset="" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:600;" data-voffset="46" data-width="['auto']" data-x="center" data-y="center" id="slide-2-layer-2">
                                    Xceed Africa facilitates the digital transformation of African businesses and helps them <br> adopt digital technology to improve efficiency, value, and innovation.
                                </div>
                                <div class="tp-caption trx-no-css tp-resizeme" data-end="8700" data-height="['auto']" data-hoffset="" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:600;" data-voffset="137" data-width="['auto']" data-x="center" data-y="center" id="slide-2-layer-3">
                                    <a class="sc_button sc_button_style_filled sc_button_size_medium" href="#about-us">Read more</a>
                                </div>
                            </li>
                            
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </section>
            <div class="page_content_wrap page_paddings_no">
                <div class="sc_section custom_bg_2">
                    <div class="content_wrap">
                        <div class="sc_empty_space" data-height="2em"></div>
                        <div class="sc_services_wrap">
                            <div class="sc_services sc_services_style_services-4 sc_services_type_icons_img margin_top_huge margin_bottom_huge">
                                <h2 class="sc_services_title sc_item_title" id="about-us">Why We Are Different...</h2>
                                <div class="sc_services_descr sc_item_descr">
                                    Businesses need just more than money which is why our investment and support approach is well-grounded <br>
                                    to help cater across all facets of the business.
                                </div>
                                <div class="sc_columns columns_wrap">
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_services_item sc_services_item_1">
                                            <div class="top_post_image">
                                                <a href="single-service.html"><img alt="" class="services-post-image" src="images/service_04.png"></a>
                                            </div>
                                            <div class="sc_services_item_content">
                                                <h4 class="sc_services_item_title"><a href="single-service.html">Domain Transformation</a></h4>
                                                <span class="sc_services_item_subtitle">Market-leading experience and services</span>
                                                <div class="sc_services_item_description">
                                                    <p>Introduce new technologies with the ability to redefine products and services and foster opportunities for non-traditional competitors</p>
                                                </div>
                                                <div class="sc_services_item_decoration"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_services_item sc_services_item_2">
                                            <div class="top_post_image">
                                                <a href="single-service.html"><img alt="" class="services-post-image" src="images/service_05.png"></a>
                                            </div>
                                            <div class="sc_services_item_content">
                                                <h4 class="sc_services_item_title"><a href="single-service.html">Business Model Transformation</a></h4>
                                                <span class="sc_services_item_subtitle">Market-leading experience and services</span>
                                                <div class="sc_services_item_description">
                                                    <p>Reinventing and adding to their current model for success and achieving a renovation that leads to significant new opportunities for growth</p>
                                                </div>
                                                <div class="sc_services_item_decoration"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_services_item sc_services_item_3">
                                            <div class="top_post_image">
                                                <a href="single-service.html"><img alt="" class="services-post-image" src="images/service_06.png"></a>
                                            </div>
                                            <div class="sc_services_item_content">
                                                <h4 class="sc_services_item_title"><a href="single-service.html">Cultural Transformation</a></h4><span class="sc_services_item_subtitle">Market-leading experience and services</span>
                                                <div class="sc_services_item_description">
                                                    <p>Aligning digital transformation efforts with organizational internal values and behaviors</p>
                                                </div>
                                                <div class="sc_services_item_decoration"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_section custom_bg_1">
                    <div class="content_wrap">
                        <div class="sc_empty_space" data-height="2em"></div>
                        <div class="sc_services_wrap">
                            <div class="sc_services sc_services_style_services-3 sc_services_type_images margin_top_huge margin_bottom_huge">
                                <h2 class="sc_services_title sc_item_title" id="our_portfolio">OUR PORTFOLIO</h2>
                                <div class="sc_services_descr sc_item_descr">
                                    Economic services provided by the finance industry, which encompasses a broad<br>
                                    range of businesses that manage money, including credit unions.
                                </div>
                                <div class="sc_columns columns_wrap">
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_services_item sc_services_item_1">
                                            <div class="sc_services_item_featured post_featured">
                                                <div class="post_thumb">
                                                    <a class="hover_icon hover_icon_link" href="single-service.html"><img alt="" src="images/01.jpg"></a>
                                                </div>
                                                <div class="sc_services_item_count">
                                                    01
                                                </div>
                                            </div>
                                            <div class="sc_services_item_content">
                                                <span class="sc_services_item_subtitle">Edustripe</span>
                                                <h4 class="sc_services_item_title"><a href="single-service.html">Education Management Application</a></h4>
                                                <div class="sc_services_item_description">
                                                    <p>Pioneering education financing in Africa by providing a reliable platform for Parents to save school fees and access educational loans</p>
                                                </div>
                                                <div class="sc_services_item_decoration"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_services_item sc_services_item_2">
                                            <div class="sc_services_item_featured post_featured">
                                                <div class="post_thumb">
                                                    <a class="hover_icon hover_icon_link" href="single-service.html"><img alt="" src="images/02.jpg"></a>
                                                </div>
                                                <div class="sc_services_item_count">
                                                    02
                                                </div>
                                            </div>
                                            <div class="sc_services_item_content">
                                                <span class="sc_services_item_subtitle">Dace</span>
                                                <h4 class="sc_services_item_title"><a href="single-service.html">Logistics Hailing Application</a></h4>
                                                <div class="sc_services_item_description">
                                                    <p>Connecting Individuals, Business Owners to Delivery companies and help fulfill delivery requests instantly</p>
                                                </div>
                                                <div class="sc_services_item_decoration"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_services_item sc_services_item_3">
                                            <div class="sc_services_item_featured post_featured">
                                                <div class="post_thumb">
                                                    <a class="hover_icon hover_icon_link" href="single-service.html"><img alt="" src="images/03.jpg"></a>
                                                </div>
                                                <div class="sc_services_item_count">
                                                    03
                                                </div>
                                            </div>
                                            <div class="sc_services_item_content">
                                                <span class="sc_services_item_subtitle">Mobkilishi
                                                </span>
                                                <h4 class="sc_services_item_title"><a href="single-service.html">Meat Processing E-Commerce Store</a></h4>
                                                <div class="sc_services_item_description">
                                                    <p>Producing and marketing the finest and premium meat products</p>
                                                </div>
                                                <div class="sc_services_item_decoration"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_section">
                    <div class="columns_wrap sc_columns no_margins" data-equal-height=".sc_column_item_inner">
                        
                        <div class="column-1 sc_column_item" id="company">
                            <div class="sc_column_item_inner custom_bg_2">
                                <div class="sc_section margin_top_huge margin_bottom_huge aligncenter" data-animation="animated fadeIn normal">
                                    <div class="sc_section_inner">
                                        <div class="sc_section_content_wrap">
                                            <div class="sc_empty_space" data-height="3px"></div>
                                            <h2 class="sc_title sc_title_regular text_align_center custom_cl_7 margin_top_medium margin_bottom_tiny-">Our Numbers</h2>
                                            <div class="sc_skills sc_skills_counter margin_top_tiny margin_bottom_medium" data-caption="Skills" data-type="counter">
                                                <!-- <h2 class="sc_skills_title sc_item_title">Proffesional solutions for your business.</h2>
                                                <div class="sc_skills_descr sc_item_descr">
                                                    We provide premium customer support and offer affiliate programs.
                                                </div> -->
                                                <div class="columns_wrap sc_skills_columns">
                                                    <div class="sc_skills_column column-1_3">
                                                        <div class="sc_skills_item sc_skills_style_2">
                                                            <div class="sc_skills_count">
                                                                <div style="font-size: 30px;">
                                                                    $5,000
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">
                                                                    Minimum Ticket Size
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info_2">
                                                                <div class="sc_skills_label">
                                                                    Market-leading experience
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_skills_column column-1_3">
                                                        <div class="sc_skills_item sc_skills_style_2">
                                                            <div class="sc_skills_count">
                                                                <div style="font-size: 30px;">
                                                                    36
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">
                                                                    Satisfied Businesses
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info_2">
                                                                <div class="sc_skills_label">
                                                                    Market-leading experience
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_skills_column column-1_3">
                                                        <div class="sc_skills_item sc_skills_style_2">
                                                            <div class="sc_skills_count">
                                                                <div style="font-size: 30px;">
                                                                    $1.3Million
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info">
                                                                <div class="sc_skills_label">
                                                                    Valuation of Portfolio
                                                                </div>
                                                            </div>
                                                            <div class="sc_skills_info_2">
                                                                <div class="sc_skills_label">
                                                                    Market-leading experience
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space" data-height="3px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_section custom_section_1">
                    <h2 class="sc_title sc_title_regular text_align_center custom_cl_7 margin_top_medium margin_bottom_tiny-" id="our-services">WHAT WE DO
                    </h2>
<br>
                    <div class="columns_wrap no_margins custom_bg_1">
                        <div class="column-1_4">
                            <div class="sc_empty_space" data-height="35px"></div>
                            <div class="sc_section margin_top_small margin_right_small margin_bottom_large margin_left_small aligncenter">
                                <div class="sc_section_inner">
                                    <div class="sc_section_content_wrap">
                                        <div class="sc_empty_space" data-height="0.5em"></div>
                                        <figure class="sc_image sc_image_shape_square">
                                            <img alt="" src="images/colored_service_1.png">
                                        </figure>
                                        <div class="sc_empty_space" data-height="0.7em"></div>
                                        <h4 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny">Angel Investing</h4>
                                        <h6 class="sc_custom_heading style_1 custom_cl_3">We invest up to $5,000 - $25,000 in idea and pre-seed startups.</span>
                                        <div class="sc_empty_space" data-height="1.1em"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-1_4 custom_bg_3">
                            <div class="sc_empty_space" data-height="35px"></div>
                            <div class="sc_section margin_top_small margin_right_small margin_bottom_large margin_left_small aligncenter">
                                <div class="sc_section_inner">
                                    <div class="sc_section_content_wrap">
                                        <div class="sc_empty_space" data-height="0.5em"></div>
                                        <figure class="sc_image sc_image_shape_square">
                                            <img alt="" src="images/colored_service_2.png">
                                        </figure>
                                        <div class="sc_empty_space" data-height="0.7em"></div>
                                        <h4 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny custom_cl_4">Digital Transformation</h4>
                                        <h6 class="sc_custom_heading style_1 custom_cl_4">We incorporate new digital technologies to help transform African business.</span>
                                        <div class="sc_empty_space" data-height="1.1em"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-1_4 custom_bg_4">
                            <div class="sc_empty_space" data-height="35px"></div>
                            <div class="sc_section margin_top_small margin_right_small margin_bottom_large margin_left_small aligncenter">
                                <div class="sc_section_inner">
                                    <div class="sc_section_content_wrap">
                                        <div class="sc_empty_space" data-height="0.5em"></div>
                                        <figure class="sc_image sc_image_shape_square">
                                            <img alt="" src="images/colored_service_3.png">
                                        </figure>
                                        <div class="sc_empty_space" data-height="0.7em"></div>
                                        <h4 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny custom_cl_4">Incubation & Acceleration</h4>
                                        <h6 class="sc_custom_heading style_1 custom_cl_5">We provide advice, guidance, and various forms of support for businesses in the startup phase.</span>
                                        <div class="sc_empty_space" data-height="1.1em"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-1_4 custom_bg_5">
                            <div class="sc_empty_space" data-height="35px"></div>
                            <div class="sc_section margin_top_small margin_right_small margin_bottom_large margin_left_small aligncenter">
                                <div class="sc_section_inner">
                                    <div class="sc_section_content_wrap">
                                        <div class="sc_empty_space" data-height="0.5em"></div>
                                        <figure class="sc_image sc_image_shape_square">
                                            <img alt="" src="images/colored_service_4.png">
                                        </figure>
                                        <div class="sc_empty_space" data-height="0.7em"></div>
                                        <h4 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny custom_cl_4">Market Research</h4>
                                        <h6 class="sc_custom_heading style_1 custom_cl_5">We run organized efforts to gather information about African businesses and their target markets and customers.</span>
                                        <div class="sc_empty_space" data-height="1.1em"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="sc_section custom_bg_2">
                    <div class="content_wrap">
                        <div class="sc_empty_space" data-height="2em"></div>
                        <div class="sc_team_wrap">
                            <div class="sc_team sc_team_style_team-3 margin_top_huge margin_bottom_large aligncenter">
                                <h2 class="sc_team_title sc_item_title" id="our-team">OUR TEAM</h2>
                                <div class="sc_team_descr sc_item_descr">
                                    We are a team of industry experts with many years of experience in venture capital, technology startups, artificial intelligence.<br>
                                    Meet the financial and marketing specialists.
                                </div>
                                <div class="sc_columns columns_wrap">
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item">
                                            <div class="sc_team_item_avatar">
                                                <img alt="" src="images/370x334.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title"><a href="single-team.html">Babajide Esho</a></h5>
                                                <div class="sc_team_item_position">
                                                    General Partner
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item">
                                            <div class="sc_team_item_avatar">
                                                <img alt="" src="images/370x334.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title"><a href="single-team.html">Michael King</a></h5>
                                                <div class="sc_team_item_position">
                                                    Finance & Commerce
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_3 column_padding_bottom">
                                        <div class="sc_team_item">
                                            <div class="sc_team_item_avatar">
                                                <img alt="" src="images/370x334.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h5 class="sc_team_item_title"><a href="single-team.html">Romeo Alvarez</a></h5>
                                                <div class="sc_team_item_position">
                                                    Company Director
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_section custom_bg_1">
                    <div class="columns_wrap sc_columns no_margins" data-equal-height=".sc_column_item">
                        <!-- <div class="column-1_2 sc_column_item">
                            <div class="sc_column_item_inner" id="contact_form">
                                <div class="sc_empty_space" data-height="8em"></div>
                            </div>
                        </div> -->
                        <div class="column-1 sc_column_item">
                            <div class="sc_empty_space" data-height="1em"></div>
                            <div class="sc_form_wrap" id="contact_us">
                                <div class="sc_form sc_form_style_form_3 margin_top_huge margin_right_small margin_bottom_huge margin_left_medium">
                                    <h2 class="sc_form_title sc_item_title">GET IN TOUCH WITH US (Contact Form)</h2>
                                    <div class="sc_form_descr sc_item_descr">
                                        We will love to hear from you.
                                    </div>
                                    <div class="sc_form_fields">
                                        <form action="include/sendmail.php" class="sc_input_hover_default" data-formtype="form_3" method="post">
                                            <div class="sc_columns columns_wrap sc_form_info">
                                                <div class="column-1_2">
                                                    <div class="sc_form_item sc_form_field">
                                                        <input aria-required="true" class="sc_form_username" name="username" placeholder="Name *" type="text">
                                                    </div>
                                                </div>
                                                <div class="column-1_2">
                                                    <div class="sc_form_item sc_form_field">
                                                        <input aria-required="true" class="sc_form_email" name="email" placeholder="E-mail *" type="text">
                                                    </div>
                                                </div>
                                                <div class="column-1_2">
                                                    <div class="sc_form_item sc_form_field">
                                                        <input aria-required="true" class="sc_form_phone" name="phone" placeholder="Phone" type="text">
                                                    </div>
                                                </div>
                                                <div class="column-1_2">
                                                    <div class="sc_form_item sc_form_field">
                                                        <input aria-required="true" class="sc_form_subj" name="subject" placeholder="Subject" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_form_item sc_form_message">
                                                <textarea aria-required="true" class="sc_form_message" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="sc_form_item sc_form_button">
                                                <button type="submit" class="sc_button sc_button_style_filled sc_button_size_medium sc_button_iconed icon-paper-plane-light">Send Request</button>
                                            </div>
                                            <div class="result sc_infobox"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_empty_space" data-height="1em"></div>
                        </div>
                    </div>
                </div>
                <div class="sc_section custom_bg_2">
                    <div class="content_wrap">
                        <div class="sc_empty_space" data-height="2.5em"></div>
                        <div class="sc_clients_wrap">
                            <div class="sc_clients sc_clients_style_clients-1 margin_top_huge margin_bottom_huge">
                                <h2 class="sc_clients_title sc_item_title">Our Clients</h2>
                                <div class="sc_clients_descr sc_item_descr">
                                    Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque<br>
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
                                </div>
                                <div class="sc_columns columns_wrap">
                                    <div class="column-1_6 column_padding_bottom">
                                        <div class="sc_clients_item">
                                            <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                        </div>
                                    </div>
                                    <div class="column-1_6 column_padding_bottom">
                                        <div class="sc_clients_item">
                                            <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                        </div>
                                    </div>
                                    <div class="column-1_6 column_padding_bottom">
                                        <div class="sc_clients_item">
                                            <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                        </div>
                                    </div>
                                    <div class="column-1_6 column_padding_bottom">
                                        <div class="sc_clients_item">
                                            <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                        </div>
                                    </div>
                                    <div class="column-1_6 column_padding_bottom">
                                        <div class="sc_clients_item">
                                            <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                        </div>
                                    </div>
                                    <div class="column-1_6 column_padding_bottom">
                                        <div class="sc_clients_item">
                                            <div class="sc_client_image"><img alt="" src="images/131x67.png"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.sc_clients -->
                        </div><!-- /.sc_clients_wrap -->
                        <div class="sc_empty_space" data-height="0.5em"></div>
                    </div>
                </div>
                <div class="sc_section">
                    <div class="content_wrap">
                        <div class="sc_empty_space" data-height="2em"></div>
                        <div class="sc_section margin_top_huge">
                            <div class="sc_section_inner">
                                <h2 class="sc_section_title sc_item_title" id="all-posts">Our Blog Posts</h2>
                                <div class="sc_section_descr sc_item_descr">
                                    Perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium,<br>
                                    totam rem aperiam, eaque ipsa quae ab illo inventore.
                                </div>
                                <div class="sc_section_content_wrap">
                                    <div class="widget_area sc_recent_news_wrap">
                                        <aside class="widget widget_recent_news" id="widget_recent_news">
                                            <div class="sc_recent_news sc_recent_news_style_news-announce">
                                                <article class="post_item post_layout_news-announce post_format_gallery post_size_big">
                                                    <div class="post_featured">
                                                        <div class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_controls sc_slider_pagination" data-interval="9920" data-old-height="334" data-old-width="370">
                                                            <div class="slides swiper-wrapper" data-style="height:334px;">
                                                                <div class="swiper-slide" data-style="background-image:url(images/370x334.jpg);width:370px;height:334px;">
                                                                    <a href="single-post.html"></a>
                                                                </div>
                                                                <div class="swiper-slide" data-style="background-image:url(images/370x334.jpg);width:370px;height:334px;">
                                                                    <a href="single-post.html"></a>
                                                                </div>
                                                                <div class="swiper-slide" data-style="background-image:url(images/370x334.jpg);width:370px;height:334px;">
                                                                    <a href="single-post.html"></a>
                                                                </div>
                                                            </div>
                                                            <div class="sc_slider_controls_wrap">
                                                                <a class="sc_slider_prev" href="#"></a> <a class="sc_slider_next" href="#"></a>
                                                            </div>
                                                            <div class="sc_slider_pagination_wrap"></div>
                                                        </div>
                                                    </div>
                                                    <div class="post_des">
                                                        <div class="cat_post_info">
                                                            <span class="post_categories"><a class="category_link" href="all-posts.html">Money</a></span>
                                                        </div>
                                                        <h5 class="post_title"><a href="single-post.html" rel="">Broker-dealer owner indicated in $17 million dump scheme</a></h5>
                                                        <div class="post_info">
                                                            <span class="post_meta_date">April 30, 2016</span> <span class="post_meta_comments icon-comment-light">2 Comments</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p><a class="readmore" href="single-post.html">Read More</a>
                                                    </div>
                                                </article>
                                                <article class="post_item post_layout_news-announce post_format_standard post_size_medium">
                                                    <div class="post_featured">
                                                        <div class="post_thumb">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html"><img alt="" src="images/370x334.jpg"></a>
                                                        </div>
                                                    </div>
                                                    <div class="post_des">
                                                        <div class="cat_post_info">
                                                            <span class="post_categories"><a class="category_link" href="all-posts.html">Money</a></span>
                                                        </div>
                                                        <h5 class="post_title"><a href="single-post.html" rel="">Credit Suisse CEO focuses on wealth management</a></h5>
                                                        <div class="post_info">
                                                            <span class="post_meta_date">April 28, 2016</span> <span class="post_meta_comments icon-comment-light">0 Comments</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh...</p><a class="readmore" href="single-post.html">Read More</a>
                                                    </div>
                                                </article>
                                                <article class="post_item post_layout_news-announce post_format_standard post_size_big right">
                                                    <div class="post_featured">
                                                        <div class="post_thumb">
                                                            <a class="hover_icon hover_icon_link" href="single-post.html"><img alt="" src="images/370x334.jpg"></a>
                                                        </div>
                                                    </div>
                                                    <div class="post_des">
                                                        <div class="cat_post_info">
                                                            <span class="post_categories"><a class="category_link" href="all-posts.html">Business</a></span>
                                                        </div>
                                                        <h5 class="post_title"><a href="single-post.html" rel="">Money Market Rates Finding the Best Accounts in 2016</a></h5>
                                                        <div class="post_info">
                                                            <span class="post_meta_date">April 26, 2016</span> <span class="post_meta_comments icon-comment-light">4 Comments</span>
                                                        </div>
                                                        <p>Perspiciatis unde omnis iste natus sit volupt tem accusantium doloremque...</p><a class="readmore" href="single-post.html">Read More</a>
                                                    </div>
                                                </article>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_section margin_top_small margin_bottom_huge aligncenter">
                            <div class="sc_section_inner">
                                <div class="sc_section_content_wrap">
                                    <a class="sc_button sc_button_style_border sc_button_size_medium margin_bottom_small" href="all-posts.html">View More Posts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- </.page_content_wrap> -->
            <footer class="footer_area_top_wrap scheme_dark">
                <div class="footer_wrap_inner">
                    <div class="columns_wrap no_margins custom_columns_1">
                        <div class="column-1_2">
                            <div class="sc_googlemap" data-style="dark" data-zoom="12" id="sc_googlemap_1">
                                <div class="sc_googlemap_marker" data-address="1, Central Road, Chicago" data-description="1, Central Road, Chicago" data-latlng="" data-point="images/map_pointer.png" data-title="1, Central Road, Chicago"></div>
                            </div>
                        </div>
                        <div class="column-1_2">
                            <div class="sc_emailer sc_emailer_opened style_line margin_top_medium margin_bottom_small margin_left_small margin_right_small">
                                <div class="lable">
                                    Newsletter
                                </div>
                                <form class="sc_emailer_form">
                                    <input class="sc_emailer_input" name="email" placeholder="Enter Your Email" type="text" value=""> <a class="sc_emailer_button" href="#" title="">Subscribe</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- /.footer_area_wrap -->
            <footer class="footer_wrap widget_area scheme_dark">
                <div class="footer_wrap_inner widget_area_inner">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                            <aside class="column-1_3 widget widget_socials">
                                <div class="widget_inner">
                                    <div class="logo">
                                        <a href="index.html"><img alt="" class="logo_main" src="images/logo-footer.png"></a>
                                    </div>
                                    <div class="logo_descr">
                                        Perspiciatis unde omnis iste natus sit voluptat<br>
                                        em accusantium doloremque laudantium<br>
                                        totam rem aperiam, eaque ipsa quae.<br>
                                        <br>
                                        <ul class="sc_list sc_list_style_iconed custom_cl_1">
                                            <li class="sc_list_item"><span class="sc_list_icon icon-location-light custom_cl_2"></span>Los Angeles, Street Avenue, La 2540</li>
                                            <li class="sc_list_item"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: 800-123-4567</li>
                                            <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: invetex@yoursite.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside class="column-1_3 widget widget_recent_posts">
                                <h5 class="widget_title">Recent Posts</h5>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                    <div class="post_content">
                                        <h6 class="post_title"><a href="single-post.html">Broker-dealer owner indicated in $17 million dump scheme</a></h6>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 30, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">2 Comments</span></a></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                    <div class="post_content">
                                        <h6 class="post_title"><a href="single-post.html">Why buying a big house is a bad investment</a></h6>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 29, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">0 Comments</span></a></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb"><img alt="" src="images/75x75.jpg"></div>
                                    <div class="post_content">
                                        <h6 class="post_title"><a href="single-post.html">Credit Suisse CEO focuses on wealth management</a></h6>
                                        <div class="post_info">
                                            <span class="post_info_item"><a class="post_info_date" href="single-post.html">April 28, 2016</a></span> <span class="post_info_item post_info_counters"><a class="post_counters_item icon-comment-light" href="single-post.html"><span class="post_counters_number">0 Comments</span></a></span>
                                        </div>
                                    </div>
                                </article>
                            </aside>
                            <aside class="column-1_3 widget widget_text">
                                <h5 class="widget_title">Contact Form</h5>
                                <div class="textwidget">
                                    <div class="sc_form_wrap">
                                        <div class="sc_form sc_form_style_form_1" id="sc_form_1">
                                            <form action="include/sendmail.php" class="sc_input_hover_default" data-formtype="form_1" method="post">
                                                <div class="sc_form_info">
                                                    <div class="sc_form_item sc_form_field">
                                                        <input aria-required="true" class="sc_form_username" name="username" placeholder="Name *" type="text">
                                                    </div>
                                                    <div class="sc_form_item sc_form_field">
                                                        <input aria-required="true" class="sc_form_email" name="email" placeholder="E-mail *" type="text">
                                                    </div>
                                                </div>
                                                <div class="sc_form_item sc_form_message">
                                                    <textarea aria-required="true" class="sc_form_message" name="message" placeholder="Message"></textarea>
                                                </div>
                                                <div class="sc_form_item sc_form_button">
                                                    <button class="sc_button sc_button_style_filled sc_button_size_medium sc_button_iconed icon-mail-light">Send Message</button>
                                                </div>
                                                <div class="result sc_infobox"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </footer><!-- /.footer_wrap -->
            <footer class="footer_area_wrap scheme_dark">
                <div class="footer_wrap_inner">
                    <div class="content_wrap">
                        <div class="sc_line sc_line_position_center_center sc_line_style_solid margin_top_null margin_bottom_small"></div>
                        <div class="follow_us">
                            Follow Us on @Instagram
                        </div>
                        <div class="sbi sbi_disable_mobile sbi_col_9" data-cols="9" data-id="3273597493" data-num="9" data-options='{&quot;sortby&quot;: &quot;none&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;0&quot;}' data-res="thumb" id="sb_instagram">
                            <div id="sbi_images">
                                <div class="sbi_loader"></div>
                            </div>
                            <div id="sbi_load"></div>
                        </div>
                    </div>
                </div>
            </footer><!-- /.footer_area_wrap -->
            <div class="copyright_wrap copyright_style_soc scheme_dark">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                            <div class="sc_socials_item">
                                <a class="social_icons social_facebook" href="#" target="_blank"><span class="icon-facebook"></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a class="social_icons social_twitter" href="#" target="_blank"><span class="icon-twitter"></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a class="social_icons social_gplus" href="#" target="_blank"><span class="icon-gplus"></span></a>
                            </div>
                            <div class="sc_socials_item">
                                <a class="social_icons social_linkedin" href="#" target="_blank"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.page_wrap -->
    </div><!-- /.body_wrap -->
    <div class="popup_wrap_bg"></div><a class="scroll_to_top icon-up" href="#" title="Scroll to top"></a> 

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6218a225a34c245641282290/1fso3ios4';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script src='js/vendor/jquery.js' type='text/javascript'></script> 
    <script src='js/vendor/jquery-migrate.min.js' type='text/javascript'></script>
	<script src='js/vendor/essgrid/jquery.themepunch.tools.min.js' type='text/javascript'></script> 
    <script src='js/vendor/essgrid/jquery.themepunch.essential.min.js' type='text/javascript'></script> 
    <script src='js/vendor/revslider/jquery.themepunch.revolution.min.js' type='text/javascript'></script> 
    <script src="js/vendor/revslider/revolution.extension.slideanims.min.js" type="text/javascript"></script> 
    <script src="js/vendor/revslider/revolution.extension.layeranimation.min.js" type="text/javascript"></script> 
    <script src="js/vendor/revslider/revolution.extension.navigation.min.js" type="text/javascript"></script> 
    <script src='js/vendor/instagram/sb-instagram.min.js' type='text/javascript'></script> 
    <script src="js/custom/custom.js" type="text/javascript"></script> 
    <script src='js/vendor/superfish.js' type='text/javascript'></script> 
    <script src='js/custom/_min.js' type='text/javascript'></script> 
    <script src='js/custom/_utils.js' type='text/javascript'></script> 
    <script src='js/custom/_init.js' type='text/javascript'></script> 
    <script src='js/custom/_debug.js' type='text/javascript'></script> 
    <script src='js/custom/_googlemap.js' type='text/javascript'></script> 
    <script src='js/custom/template.init.js' type='text/javascript'></script> 
    <script src='js/vendor/mediaelement/mediaelement-and-player.min.js' type='text/javascript'></script> 
    <!-- <script src='js/custom/_shortcodes.js' type='text/javascript'></script>  -->
    <script src='js/custom/_messages.js' type='text/javascript'></script> 
    <script src='js/vendor/magnific-popup/jquery.magnific-popup.min.js' type='text/javascript'></script> 
    <script src='js/vendor/swiper/swiper.js' type='text/javascript'></script> 
    <script src='http://maps.google.com/maps/api/js?key=' type='text/javascript'></script>
</body>
</html>