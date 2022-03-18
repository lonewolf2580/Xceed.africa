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
$phone = "+33753047358";
$address = "23 Rue Louis Jasseron, Lyon, France 69003";
$email = "babajide@xceed.africa";
$googleform = "#";
$primarycolor = "#2B389D"; //Deep Blue
$secondarycolor = "#138DB8"; //Light Bue
$secondarycolor2 = "#910F70";
$secondarycolor3 = "#F0245C"; //Red

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
                            <?= $address; ?>.
                            </div>
                            <div class="top_panel_top_open_hours icon-clock-light">
                                Mon - Fri : 09:00 - 17:00
                            </div>
                            <div class="top_panel_top_ophone icon-call-out">
                                <a href="tel:<?= $phone; ?>" style="color:#fff;"><?= $phone; ?></a>
                            </div>
                            <div class="top_panel_top_user_area cart_show">
                                <div class="menu_pushy_wrap">
                                    <a class="menu_pushy_button icon-1460034782_menu2" href="#"></a>
                                </div>
                                <ul class="menu_user_nav" id="menu_user">
                                    <li class="menu_user_register_login">
                                        <a class="sc_button sc_button_style_filled sc_button_size_medium" href="<?= $googleform; ?>" style="background: <?= $primarycolor; ?>;">Apply</a> <a> </a>
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
                                                <li class="sc_list_item"><span class="sc_list_icon icon-location-light custom_cl_2"></span><?= $address; ?></li>
                                                <li class="sc_list_ite"><span class="sc_list_icon icon-mobile-light custom_cl_2"></span>Phone: <?= $phone; ?></li>
                                                <li class="sc_list_item"><span class="sc_list_icon icon-mail-light custom_cl_2"></span>Email: <?= $email; ?></li>
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