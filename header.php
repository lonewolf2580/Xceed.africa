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

$facebook = "https://www.facebook.com/Xceed.Africa/";
$twitter = "https://twitter.com/XceedAfrica";
$instagram = "https://www.instagram.com/xceed.africa/";
$linkedin = "https://www.linkedin.com/company/xceed-africa/about/?viewAsMember=true";

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
                                            <a class="social_icons social_facebook" href="<?= $facebook; ?>" target="_blank"><span class="icon-facebook"></span></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a class="social_icons social_twitter" href="<?= $twitter; ?>" target="_blank"><span class="icon-twitter"></span></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a class="" href="<?= $instagram; ?>" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Instagram_simple_icon.svg/120px-Instagram_simple_icon.svg.png" alt=""></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a class="social_icons social_linkedin" href="<?= $linkedin; ?>" target="_blank"><span class="icon-linkedin"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>