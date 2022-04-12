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
</div>