<?php function WoocommerceBeforeSingleProductCallback() { 
if ( ! defined( 'ABSPATH' ) ) {
exit;  // Exit if accessed directly
}
get_header(); ?>
<div id="wpfl_content_and_sidebar_container">
<div id="wpfl_content">
<div id="wpfl_content_margin">
<div class="remove_collapsing_margins"></div>
<?php if (TemplateToaster_theme_option('ttr_page_breadcrumb')){  
do_action( 'woocommerce_before_main_content' );} ?> 
<?php } ?>
<?php function woocommerce_after_single_productCallback() { ?> 
</div><!-- content_margin close-->
</div><!-- content close-->
<div style="clear: both;"></div>
</div>
<?php get_footer(); }?>