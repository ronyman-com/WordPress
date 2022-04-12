<?php
/**
* Template Name:woocommerce
* @package TemplateToaster
*/
?>
<?php include 'shop.php'; include 'disc.php'; ?>
<?php
add_filter( 'woocommerce_show_page_title', 'templatetoster_woo_archive_title' );
function templatetoster_woo_archive_title() {
$page_id = wc_get_page_id('shop');
$var1 = templatetoaster_theme_option('ttr_all_page_title');
$var = get_post_meta ( $page_id, 'ttr_page_title_checkbox', true );
if ($var != 'false' && $var1) :
echo '<h1 class="wpfl_page_title entry-title">';
 echo woocommerce_page_title();
 echo '</h1>';
endif;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'TemplateToaster_change_breadcrumb_delimiter' );
function TemplateToaster_change_breadcrumb_delimiter( $defaults ) {
$defaults['delimiter'] = ' | ';
return $defaults;
}
add_action('woocommerce_before_main_content', 'WoocommerceBeforeMainContent_calback', 1);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action('woocommerce_after_main_content', 'WoocommerceAfterMainContent_calback');
add_action('woocommerce_before_single_product', 'WoocommerceBeforeSingleProductCallback');
add_action('woocommerce_after_single_product', 'woocommerce_after_single_productcallback');
add_action('woocommerce_before_add_to_cart_form','TemplateToaster_single_product_page');
if(! function_exists( 'TemplateToaster_single_product_page' ) ){
function TemplateToaster_single_product_page() {
echo'<p id="product_condition" style="clear:both">';
} }
?>
<?php if ( is_singular( 'product' ) ) {
woocommerce_content();
}else{
wc_get_template( 'archive-product.php' );
} ?>
