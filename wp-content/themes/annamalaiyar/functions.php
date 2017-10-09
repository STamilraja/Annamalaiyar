<?php
@ini_set( 'upload_max_size' , '64M' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 9999 );
function theme_enqueue_styles() {
  wp_deregister_script('jquery');
  wp_dequeue_style( 'bootstrap-css' );
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menu' );
// feature shortcode

// function welcome_shortcode($atts,$content = null)
// {
//     extract(shortcode_atts(array( 'title' => ''),$atts));
//     $imgPathContArr = wp_upload_dir();
//     $imgPathCont = $imgPathContArr['baseurl'];
//     $output = '';
//     $output .= '<div class="row">';
//     $output .= '<div class="col-md-5 col-sm-6 col-xs-12 text-center">';
//     $output .= '<img src="'.$imgPathCont.'" alt=""/></div>';
//     $output .= '<div class="col-md-7 col-sm-6 col-xs-12 border-add md-add">';
//     $output .= '<h2 class="ttu">'.$title.'</h2>';
//     $output .= '<p class="p__mod">'.$content'</p>';
//     $output .= '<a href="#" class="btn btn-primary">Click here</a>';
//     $output .= '</div>';
//     $output .= '</div>';
//     return $output;
// }
function welcome_shortcode($atts,$content = null) {
  extract(shortcode_atts(array( 'title' => ''),$atts));
  $imgPathContArr = wp_upload_dir();
  $imgPathCont = $imgPathContArr['baseurl'];
  $output = '';
  $output .= '<div class="row">';
      $output .= '<div class="col-md-5 col-sm-6 col-xs-12 text-center">';
      $output .= '<img src="'.$imgPathCont.'/2017/10/front_view.jpg" class="img-responsive" style="padding-top:65px;" alt=""/></div>';
      $output .= '<div class="col-md-7 col-sm-6 col-xs-12 border-add md-add">';
      $output .= '<h2 class="ttu">'.$title.'</h2>';
      $output .= '<p class="p__mod">'.$content.'</p>';
      $output .= '<a href="#" class="btn btn-primary">Click here</a>';
      $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';
	return $output;
}
add_shortcode('welcome','welcome_shortcode');

function banner_shortcode($atts,$content = null) {
  extract(shortcode_atts(array( 'src' => ''),$atts));
  $imgPathContArr = wp_upload_dir();
  $imgPathCont = $imgPathContArr['baseurl'];
  $output = '';
  $output .= '<div data-src="'.$imgPathCont.''.$src.'"></div>';
	return $output;
}
add_shortcode('banner','banner_shortcode');

function home_content_shortcode($atts,$content = null) {
  extract(shortcode_atts(array( 'src' => '', 'title' => ''),$atts));
  $imgPathContArr = wp_upload_dir();
  $imgPathCont = $imgPathContArr['baseurl'];
  $output = '<div class="item">';
  $output .= '<div>';
  $output .= '<img src="'.$imgPathCont.''.$src.'" alt="">';
  $output .= '<h3 class="ttu">'.$title.'</h3>';
  $output .= '<p class="p__mod">'.$content.'</p>';
  $output .= '<a href="#" class="btn-link">Learn more</a>';
  $output .= '</div>';
  $output .= '</div>';

	return $output;
}
add_shortcode('home_content','home_content_shortcode');
