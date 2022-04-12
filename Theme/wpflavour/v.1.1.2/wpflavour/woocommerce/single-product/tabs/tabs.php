<?php /**
* Single Product tabs
* @version 3.8.0
*/ ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
exit;
}
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $tabs ) ) : ?>
<div style="clear: both;"></div>
<div class="wc-tabs-wrapper" style="clear:both;">
<ul class="wpfl_prodes_Tab_Title nav nav-tabs tabs wc-tabs">
<?php foreach ( $tabs as $key => $tab ) : ?>
<li class="<?php echo esc_attr( $key ); ?>_tab">
<a class="nav-link"href="#tab-<?php echo esc_attr( $key ); ?>">
<?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
</a></li>
	<?php endforeach; ?>
</ul>
<div class="wpfl_prodes_Tab_Content tab-content">
<?php foreach ( $tabs as $key => $tab ) : ?>
<div class="panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
<?php if ( isset( $tab['callback'] ) ) {
 call_user_func( $tab['callback'], $key, $tab ); } ?>
</div>
<?php endforeach; ?>
<?php if(version_compare( WC_VERSION, '3.8', '>=' ) ) {
 do_action( 'woocommerce_product_after_tabs' );
} ?>
</div></div>
<?php endif; ?>
