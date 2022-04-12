<?php
global $wp_scripts;
global $TemplateToaster_justify;
global $TemplateToaster_magmenu;
global $TemplateToaster_menuh;
global $TemplateToaster_vmenuh;
global $TemplateToaster_ocmenu;
global $TemplateToaster_no_slides, $TemplateToaster_slide_show_visible;
$TemplateToaster_no_slides = 3;
$TemplateToaster_slide_show_visible = true;
$TemplateToaster_magmenu = false;
$TemplateToaster_menuh = true;
$TemplateToaster_vmenuh = false;
$TemplateToaster_justify = false;
global $TemplateToaster_cssprefix;
$TemplateToaster_cssprefix="wpfl_";
global $TemplateToaster_fontSize1, $TemplateToaster_style1, $sidebarmenuheading;
$TemplateToaster_style1="";
$sidebarmenuheading = TemplateToaster_theme_option('ttr_sidebarmenuheading');
$TemplateToaster_fontSize1 = TemplateToaster_theme_option('ttr_font_size_sidebarmenu');
add_shortcode( 'widget', 'my_widget_shortcode' );
function my_widget_shortcode( $atts ) {
global $TemplateToaster_cssprefix;
extract( shortcode_atts(
array(
'type'  => '',
'title' => '',
'style' => '',
),
$atts));
if($TemplateToaster_style=='block'):
$args = array(
'before_widget' => '<div class="'.$TemplateToaster_cssprefix.'block %2$s"><div class="remove_collapsing_margins"></div>',
'after_widget'  => '</div>',
'before_title'  => '<div class="'.$TemplateToaster_cssprefix.'block_header"><h3 class="'.$TemplateToaster_cssprefix.'block_heading widget_before_title">',
'after_title'   => '</h3></div>',
);
else:
$args = array(
'before_widget' => '<div class="box widget">',
'after_widget'  => '</div>',
'before_title'  => '<div class="wcidget-title">',
'after_title'   => '</div>',
);
endif;
the_widget( $type, $atts, $args );
}
add_action('wp_enqueue_scripts', 'TemplateToaster_scripts_method');
function TemplateToaster_scripts_method() {
$TemplateToaster_js_enable =  TemplateToaster_theme_option('ttr_theme_bootstrap_enable');
if($TemplateToaster_js_enable)
{
 if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
wp_register_script('bootstrapfront', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '5.0.0-beta1', true);
} else {
wp_register_script('bootstrapfront', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.0.0-beta1', true);
}
wp_enqueue_script('bootstrapfront');
}
wp_register_script('customscripts', get_template_directory_uri() . '/js/customscripts.js', array('jquery'), '1.0.0', true);
 wp_enqueue_script('customscripts');
wp_register_script('jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('tt_slideshow', get_template_directory_uri() . '/js/tt_slideshow.js', array('jquery','jquery-ui.min'), '1.0.0', true);
wp_register_script('totop', get_template_directory_uri() . '/js/totop.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('totop');
wp_register_script('tt_animation', get_template_directory_uri() . '/js/tt_animation.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('tt_animation');
wp_register_script('tt_googlemaps', '//maps.googleapis.com/maps/api/js',  '1.0.0', true);
wp_enqueue_style('menuie', get_stylesheet_directory_uri() . '/menuie.css');
wp_style_add_data('menuie', 'conditional', 'if lte IE 8');
wp_enqueue_style('vmenuie', get_stylesheet_directory_uri() . '/vmenuie.css');
wp_style_add_data('vmenuie', 'conditional', 'if lte IE 8');
wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
wp_enqueue_style('bootstrap');
wp_register_style('rtl', get_stylesheet_directory_uri() . '/rtl.css');
wp_register_style('style', get_stylesheet_directory_uri() . '/style.css');
wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}
function TemplateToaster_widgets_init() {
global $TemplateToaster_cssprefix;
$TemplateToaster_cssprefix="wpfl_";
global $TemplateToaster_theme_widget_args;
global $TemplateToaster_fontSize, $TemplateToaster_style;
$heading_tag = TemplateToaster_theme_option('ttr_heading_tag_block');
 if(empty($heading_tag) || $heading_tag == Null){
$heading_tag = 'h3';
}
$TemplateToaster_style="";
 $blockheading = TemplateToaster_theme_option('ttr_blockheading');
 $TemplateToaster_fontSize = TemplateToaster_theme_option('ttr_font_size_block');
 if(!empty($blockheading)){
 $TemplateToaster_style .= "color:".$blockheading.";";
 }
 if(!empty($TemplateToaster_fontSize)){
 $TemplateToaster_style .= "font-size:".$TemplateToaster_fontSize."px;";
 }
$TemplateToaster_theme_widget_args = array('before_widget' => '<div class="'.$TemplateToaster_cssprefix.'block %2$s"><div class="remove_collapsing_margins"></div> <div class="'.$TemplateToaster_cssprefix.'block_header">',
'after_widget' => '</div></div>~tt',
'before_title' => '<'.TemplateToaster_theme_option('ttr_heading_tag_block').' class="'.$TemplateToaster_cssprefix.'block_heading">
',
'after_title' => '</'.$heading_tag.'></div> <div id="%1$s" class="'.$TemplateToaster_cssprefix.'block_content">',
);
extract($TemplateToaster_theme_widget_args);
register_sidebar( array(
'name' => __( 'CAWidgetArea00', 'wpflavour' ),
'id' => 'contenttopcolumn1',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CAWidgetArea01', 'wpflavour' ),
'id' => 'contenttopcolumn2',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CAWidgetArea02', 'wpflavour' ),
'id' => 'contenttopcolumn3',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CAWidgetArea03', 'wpflavour' ),
'id' => 'contenttopcolumn4',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HAWidgetArea00', 'wpflavour' ),
'id' => 'headerabovecolumn1',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HAWidgetArea01', 'wpflavour' ),
'id' => 'headerabovecolumn2',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HAWidgetArea02', 'wpflavour' ),
'id' => 'headerabovecolumn3',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HAWidgetArea03', 'wpflavour' ),
'id' => 'headerabovecolumn4',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HBWidgetArea00', 'wpflavour' ),
'id' => 'headerbelowcolumn1',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HBWidgetArea01', 'wpflavour' ),
'id' => 'headerbelowcolumn2',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HBWidgetArea02', 'wpflavour' ),
'id' => 'headerbelowcolumn3',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'HBWidgetArea03', 'wpflavour' ),
'id' => 'headerbelowcolumn4',
'description' => __( 'An optional widget area for your site header', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SAWidgetArea00', 'wpflavour' ),
'id' => 'slideshowabovecolumn1',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SAWidgetArea01', 'wpflavour' ),
'id' => 'slideshowabovecolumn2',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SAWidgetArea02', 'wpflavour' ),
'id' => 'slideshowabovecolumn3',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SAWidgetArea03', 'wpflavour' ),
'id' => 'slideshowabovecolumn4',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SBWidgetArea00', 'wpflavour' ),
'id' => 'slideshowbelowcolumn1',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SBWidgetArea01', 'wpflavour' ),
'id' => 'slideshowbelowcolumn2',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SBWidgetArea02', 'wpflavour' ),
'id' => 'slideshowbelowcolumn3',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'SBWidgetArea03', 'wpflavour' ),
'id' => 'slideshowbelowcolumn4',
'description' => __( 'An optional widget area for your site slideshow', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CBWidgetArea00', 'wpflavour' ),
'id' => 'contentbottomcolumn1',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CBWidgetArea01', 'wpflavour' ),
'id' => 'contentbottomcolumn2',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CBWidgetArea02', 'wpflavour' ),
'id' => 'contentbottomcolumn3',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'CBWidgetArea03', 'wpflavour' ),
'id' => 'contentbottomcolumn4',
'description' => __( 'An optional widget area for your site content', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FAWidgetArea00', 'wpflavour' ),
'id' => 'footerabovecolumn1',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FAWidgetArea01', 'wpflavour' ),
'id' => 'footerabovecolumn2',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FAWidgetArea02', 'wpflavour' ),
'id' => 'footerabovecolumn3',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FAWidgetArea03', 'wpflavour' ),
'id' => 'footerabovecolumn4',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FBWidgetArea00', 'wpflavour' ),
'id' => 'footerbelowcolumn1',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FBWidgetArea01', 'wpflavour' ),
'id' => 'footerbelowcolumn2',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FBWidgetArea02', 'wpflavour' ),
'id' => 'footerbelowcolumn3',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FBWidgetArea03', 'wpflavour' ),
'id' => 'footerbelowcolumn4',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'first-footer-widget-area', 'wpflavour' ),
'id' => 'first-footer-widget-area',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'second-footer-widget-area', 'wpflavour' ),
'id' => 'second-footer-widget-area',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'third-footer-widget-area', 'wpflavour' ),
'id' => 'third-footer-widget-area',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'abc00', 'wpflavour' ),
'id' => 'footercellcolumn1',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'abc11', 'wpflavour' ),
'id' => 'footercellcolumn2',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'abc02', 'wpflavour' ),
'id' => 'footercellcolumn3',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'abc23', 'wpflavour' ),
'id' => 'footercellcolumn4',
'description' => __( 'An optional widget area for your site footer', 'wpflavour' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>~tt",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'TemplateToaster_widgets_init' );?>
