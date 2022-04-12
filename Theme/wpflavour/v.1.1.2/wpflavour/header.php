<?php
/**
* The header for our theme.
*
* @package TemplateToaster
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300italic,300,400italic,700,900,700italic,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if IE 7]>
<style type="text/css" media="screen">
#wpfl_vmenu_items  li.wpfl_vmenu_items_parent {display:inline;}
</style>
<![endif]-->
<style>
<?php $var = templatetoaster_theme_option('ttr_avatar_size');
if(!empty($var)){ 
?>
.wpfl_comment_author{width : <?php echo TemplateToaster_theme_option('ttr_avatar_size')."px";?>;}
<?php 
$avtar = $var + 10;
} else {
$avtar = 10;
} ?>
.wpfl_comment_text{width :calc(100% - <?php echo $avtar."px"?>);}
@media only screen and (max-width:991px){
.archive #wpfl_page #wpfl_content .products li.product:nth-child(4n+1){ float:left;width:calc(100%/4); clear:both !important;}
#wpfl_page #wpfl_content .products li.product:first-child,#wpfl_page #wpfl_content .products li.product{float:left;width:calc(100%/4);clear:none;}}
@media only screen and (max-width:767px){
.archive #wpfl_page #wpfl_content .products li.product:nth-child(1n+1){ float:left;width:calc(100%/1); clear:both !important;}
#wpfl_page #wpfl_content .products li.product:first-child,#wpfl_page #wpfl_content .products li.product{float:left;width:calc(100%/1);clear:none;}}
</style>
<?php wp_head(); ?>
</head>
<?php
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
global $TemplateToaster_cssprefix;
$theme_path_content = get_template_directory_uri().'/content';
$pageClass = strtolower(preg_replace('/_page.php$/', '', get_page_template_slug()));
if(empty($pageClass) && is_home() || is_single() || is_category() || is_archive() || is_search()){$pageClass = "blog-wp";
}
if (strrchr($pageClass, '/')) {
$pageClass = substr(strrchr($pageClass, '/'), 1);
}
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
if(is_shop() || is_product_category() || $pageClass == 'shop') {
$pageClass = $TemplateToaster_cssprefix."ecommerce shop";
}
if(is_product() || $pageClass == 'productdescription') {
$pageClass = $TemplateToaster_cssprefix."ecommerce productdescription";
}
if(is_checkout()  || is_cart() || is_wc_endpoint_url('view-order'))	{
$pageClass = $TemplateToaster_cssprefix."ecommerce productcheckout";
}
}
?>
<body <?php body_class($pageClass); ?>> 
<?php if(function_exists('wp_body_open')) {
wp_body_open();
}?> 
<?php if (TemplateToaster_theme_option('ttr_back_to_top')): ?>
<?php $gotopng = TemplateToaster_theme_option('ttr_icon_back_to_top');?>
<div class="totopshow">
<?php if(!empty($gotopng)): ?>
<a href="#" class="back-to-top">
<img alt="<?php esc_attr_e('Back to Top', 'wpflavour'); ?>" src="<?php echo esc_url($gotopng); ?>">
</a>
<?php else : ?>
<a href="#" class="back-to-top">
<img alt="<?php esc_attr_e('Back to Top', 'wpflavour'); ?>" src="<?php echo esc_url(get_template_directory_uri()).'/images/gototop0.png';?>">
</a>
<?php endif; ?>
</div>
<div class="margin_collapsetop"></div>
<?php endif; ?>
<div  class="margin_collapsetop"></div>
<div id="wpfl_page" class="container g-0">
<div class="wpfl_banner_header">
<?php
if( is_active_sidebar( 'headerabovecolumn1'  ) || is_active_sidebar( 'headerabovecolumn2'  ) || is_active_sidebar( 'headerabovecolumn3'  ) || is_active_sidebar( 'headerabovecolumn4'  )):
?>
<div class="wpfl_banner_header_inner_above_widget_container"> <!-- _widget_container-->
<div class="wpfl_banner_header_inner_above0 container row g-0">
<?php if ( is_active_sidebar('headerabovecolumn1') ) : ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('headerabovecolumn2') ) : ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('headerabovecolumn3') ) : ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('headerabovecolumn4') ) : ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'HAWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-xxl-block d-xl-block  d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<div class="d-xxl-block d-xl-block visible-lg-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
<div class="remove_collapsing_margins"></div>
<?php $postid = ( isset( $post->ID ) ? get_the_ID() : NULL );
$var = get_post_meta ( $postid, 'ttr_page_head_checkbox', true );
if ($var == "true" || $var == ""):?>
<header id="wpfl_header"<?php if ( get_header_image() ) : ?> style="background-image: url(<?php header_image(); ?>);background-position: center;"<?php endif; ?> >
<div class="margin_collapsetop"></div>
<div id="wpfl_header_inner"<?php if ( get_header_image() ) : ?> style="background-image: url(<?php echo header_image(); ?>);background-position:  center;"<?php endif; ?> >
<div class="innermenu"><div class="remove_collapsing_margins"></div>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
<div class="navigation-top">
<div class="wrap">
<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
</div><!-- .wrap -->
</div><!-- .navigation-top -->
<?php endif; ?>

</div>
<div class="wpfl_header_element_alignment container g-0">
<div class="wpfl_images_container">
</div>
</div>
<div class="wpfl_images_container">
<?php if (TemplateToaster_theme_option ("ttr_header_logo_enable")):?>
<div class="wpfl_header_logo">
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
echo '<img src="'. esc_url( $logo[0] ) .'"alt="logo" class="" />'; 
}
?>
</div>
<?php endif; ?>
</div>
</div>
</header>
<?php endif; ?>
<div class="wpfl_banner_header">
<?php
if( is_active_sidebar( 'headerbelowcolumn1'  ) || is_active_sidebar( 'headerbelowcolumn2'  ) || is_active_sidebar( 'headerbelowcolumn3'  ) || is_active_sidebar( 'headerbelowcolumn4'  )):
?>
<div class="wpfl_banner_header_inner_below_widget_container"> <!-- _widget_container-->
<div class="wpfl_banner_header_inner_below0 container row g-0">
<?php if ( is_active_sidebar('headerbelowcolumn1') ) : ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn2') ) : ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn3') ) : ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('headerbelowcolumn4') ) : ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="headerbelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'HBWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-xxl-block d-xl-block  d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<div class="d-xxl-block d-xl-block visible-lg-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div><?php
global  $post;
$posttype = get_post_type( $post );
if ((class_exists( 'WooCommerce' ) && (is_shop() || (!is_woocommerce() && !is_account_page() && !is_cart() && !is_checkout())) ) || ( $posttype == 'post' )) {
 ?>
<div class="wpfl_banner_slideshow">
<?php
if( is_active_sidebar( 'slideshowabovecolumn1'  ) || is_active_sidebar( 'slideshowabovecolumn2'  ) || is_active_sidebar( 'slideshowabovecolumn3'  ) || is_active_sidebar( 'slideshowabovecolumn4'  )):
?>
<div class="wpfl_banner_slideshow_inner_above_widget_container"> <!-- _widget_container-->
<div class="wpfl_banner_slideshow_inner_above0 container row g-0">
<?php if ( is_active_sidebar('slideshowabovecolumn1') ) : ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('slideshowabovecolumn2') ) : ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('slideshowabovecolumn3') ) : ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('slideshowabovecolumn4') ) : ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowabovecolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'SAWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-xxl-block d-xl-block  d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<div class="d-xxl-block d-xl-block visible-lg-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
<div class="wpfl_slideshow">
<div class="margin_collapsetop"></div>
<div id="wpfl_slideshow_inner">
<ul>
<li id="Slide0" class="wpfl_slide" data-slideEffect="Fade">
<a href="http://www.example.com"></a>
<div class="wpfl_slideshow_last">
<div class="wpfl_slideshow_element_alignment container g-0" data-begintime="0" data-effect="Fade" data-easing="linear" data-slide="None" data-duration="0">
</div>
</div>
</li>
<li id="Slide1" class="wpfl_slide" data-slideEffect="Fade">
<a href="http://www.example.com"></a>
<div class="wpfl_slideshow_last">
<div class="wpfl_slideshow_element_alignment container g-0" data-begintime="0" data-effect="Fade" data-easing="linear" data-slide="None" data-duration="0">
</div>
</div>
</li>
<li id="Slide2" class="wpfl_slide" data-slideEffect="Fade">
<a href="http://www.example.com"></a>
<div class="wpfl_slideshow_last">
<div class="wpfl_slideshow_element_alignment container g-0" data-begintime="0" data-effect="Fade" data-easing="linear" data-slide="None" data-duration="0">
</div>
</div>
</li>
</ul>
</div>
<div class="wpfl_slideshow_in">
<div class="wpfl_slideshow_last">
<div id="nav"></div>
<div class="wpfl_slideshow_logo">
</div>
</div>
</div>
</div>
<div class="wpfl_banner_slideshow">
<?php
if( is_active_sidebar( 'slideshowbelowcolumn1'  ) || is_active_sidebar( 'slideshowbelowcolumn2'  ) || is_active_sidebar( 'slideshowbelowcolumn3'  ) || is_active_sidebar( 'slideshowbelowcolumn4'  )):
?>
<div class="wpfl_banner_slideshow_inner_below_widget_container"> <!-- _widget_container-->
<div class="wpfl_banner_slideshow_inner_below0 container row g-0">
<?php if ( is_active_sidebar('slideshowbelowcolumn1') ) : ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('slideshowbelowcolumn2') ) : ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('slideshowbelowcolumn3') ) : ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('slideshowbelowcolumn4') ) : ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="slideshowbelowcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'SBWidgetArea03'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-xxl-block d-xl-block  d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<div class="d-xxl-block d-xl-block visible-lg-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
</div>
<?php } ?>
