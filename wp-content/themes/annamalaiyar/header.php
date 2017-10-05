<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zerif
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_stylesheet_directory_uri();?>/assets/images/favicon.jpg" rel="shortcut icon">
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.css" rel="stylesheet">
<!-- Links -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/camera.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/owl-carousel.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/jquery.fancybox.css">
<!--JS-->
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->
<style>
</style>
<?php wp_head(); ?>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header class="clearfix">
        <div id="stuck_container" class="stuck_container">
            <nav class="navbar">
                <div class="navbar-brand">
                    <a href="<?php echo get_home_url();?>">
                        <h1 class="brand_name">
                            Annamalaiyar
                        </h1>
                    </a>
                </div>
                <?php wp_nav_menu(array( 'theme_location' => 'header-menu', 'menu_class' => 'nav sf-menu' )); ?>
            </nav>
        </div>

        <section>
            <div class="container">
                <div class="position-abs">
                    <div class="cnt">
                        <h1 class="fw-xb">Serving the needs of the <br/> People </h1>
                    </div>

                    <div class="block-contact wow fadeInRight" data-wow-duration="2s">

                        <dl>
                            <dt class="fw-xb">Temple Hours:</dt>
                            <dd><span class="fw-b">Monday - Friday:</span> 9:30am - 12:30pm | 5:30pm - 8:30pm</dd>
                            <dd><span class="fw-b">Saturday - Sunday:</span> 9:00am - 8:30pm</dd>
                        </dl>

                        <dl>
                            <dt class="fw-xb">Daily Aarti:</dt>
                            <dd>12:00pm and 7:30pm</dd>
                        </dl>
                    </div>
                </div>

            </div>
        </section>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
              <?php
                $page = get_page_by_title( 'Banner Image' );
                $content = apply_filters('the_content', $page->post_content);
                echo $content;
              ?>
                <!-- <div data-src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner-1.jpg"></div>
                <div data-src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner-2.jpg"></div> -->
            </div>
        </div>
    </header>
