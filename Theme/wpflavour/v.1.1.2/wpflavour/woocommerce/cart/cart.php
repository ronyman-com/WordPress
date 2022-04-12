<?php /**
* Cart Page
* @version 4.4.0
*/ ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
exit;
}
wc_print_notices();
do_action( 'woocommerce_before_cart' ); ?>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<?php do_action( 'woocommerce_before_cart_table' ); ?>
<table class="wpfl_prochec_table_background col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 std table cart_table shop_table shop_table_responsive cart woocommerce-cart-form__contents" id="cart_summary">
<colgroup>
<col style="width:14.36%">
<col style="width:28.20%">
<col style="width:14.36%">
<col style="width:14.36%">
<col style="width:14.36%">
<col style="width:14.36%">
</colgroup>
<thead>
<tr class="wpfl_prochec_Heading row-0">
<th class="product-thumbnail"><?php _e( 'Image', 'wpflavour' );?></th>
<th class="product-name"><?php _e( 'Description', 'wpflavour' );?></th>
<th class="product-price"><?php _e( 'Price', 'wpflavour' ); ?></th>
<th class="product-quantity"><?php _e( 'Quantity', 'wpflavour' );?></th>
<th class="product-subtotal"><?php _e( 'Total', 'wpflavour' ); ?></th>
<th class="product-remove"><?php _e( 'Delete', 'wpflavour' ); ?></th>
</tr></thead>
<tbody>
<?php do_action( 'woocommerce_before_cart_contents' ); ?>
<?php
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
?>
<tr class="wpfl_prochec_row_1 row-1 woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
<td class="wpfl_prochec_image_border prochec_img product-thumbnail text-center" data-title="<?php _e( 'Image', 'wpflavour' );?>">
<?php $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
if ( ! $_product->is_visible() ) {
echo wp_kses_post( $thumbnail );
} else {
printf( '<a class="cart-image" href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), wp_kses_post( $thumbnail ) );
}	?>	</td>
<td class="wpfl_prochec_des wpfl_prochec_product_description product-name text-center" data-title="<?php _e( 'Description', 'wpflavour' ); ?>">
<?php  if ( ! $_product->is_visible() ) {
echo apply_filters( 'woocommerce_cart_item_name', esc_html( $_product->get_title() ), $cart_item, $cart_item_key ) . '&nbsp;';
} else {
echo apply_filters( 'woocommerce_cart_item_name', esc_html( $_product->get_name() ), $cart_item, $cart_item_key ) . '&nbsp;'; }
if(version_compare( WC_VERSION, '3.3', '>=' ) ) {
echo wc_get_formatted_cart_item_data( $cart_item ); }
else {
echo WC()->cart->get_item_data( $cart_item ); }
if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'wpflavour' ) . '</p>';
}	?>	</td>
<td class="wpfl_prochec_price prochec_unit_price product-price text-center" data-title="<?php _e( 'Price', 'wpflavour' ); ?>">
<?php	echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );	?>
</td>
<td class="wpfl_prochec_price prochec_unit_price product-quantity text-center qtybox" data-title="<?php _e( 'Quantity', 'wpflavour' ); ?>">
<?php if ( $_product->is_sold_individually() ) {
$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
} else {
$product_quantity = woocommerce_quantity_input( array(
'input_name'  => "cart[{$cart_item_key}][qty]",
'input_value' => $cart_item['quantity'],
'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
'min_value'   => '0'
), $_product, false );
}
echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
?> </td>
<td class="wpfl_prochec_price prochec_total product-subtotal text-center" data-title="<?php _e( 'Total', 'wpflavour' ); ?>">
<?php	echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );		?>
</td>
<td class="wpfl_prochec_delete product-remove text-center" data-title="<?php _e( 'Delete', 'wpflavour' ); ?>">
<?php
if(version_compare( WC_VERSION, '3.3', '>=' ) ) {
echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s"><img src="'.get_template_directory_uri().'/images/btn_trash.png" alt="btn_trash.png" ></a>',esc_url( wc_get_cart_remove_url( $cart_item_key ) ),__( 'Remove this item', 'wpflavour' ),esc_attr( $product_id ),esc_attr( $_product->get_sku() )), $cart_item_key ); }
else {
echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s"><img src="'.get_template_directory_uri().'/images/btn_trash.png" alt="btn_trash.png" ></a>',esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),__( 'Remove this item', 'wpflavour' ),esc_attr( $product_id ),esc_attr( $_product->get_sku() )), $cart_item_key ); }
	?>	</td>	</tr>
<?php
}
}
do_action( 'woocommerce_cart_contents' );
?>
<tr><td colspan="6" class="actions woo_cart_table">
<?php if ( wc_coupons_enabled() ) { ?>
<div class="coupon">
<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'wpflavour' ); ?>" /> 
<input type="submit" class="btn btn-warning" name="apply_coupon" style="margin-left: 15px;" value="<?php esc_attr_e( 'Apply Coupon', 'wpflavour' ); ?>" />
<?php do_action( 'woocommerce_cart_coupon' ); ?>
<?php } ?>
</div>
<input type="submit" class="btn btn-warning" name="update_cart" style="float: right;" value="<?php esc_attr_e( 'Update Cart', 'wpflavour' ); ?>" />
<?php do_action( 'woocommerce_cart_actions' ); ?>
<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
</td> </tr>
<?php do_action( 'woocommerce_after_cart_contents' ); ?>
</tbody>
</table>
<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
<?php if(version_compare( WC_VERSION, '3.8', '>=' ) ) {
 do_action( 'woocommerce_before_cart_collaterals' ); 
} ?>
<div class="cart-collaterals">
<?php do_action( 'woocommerce_cart_collaterals' ); ?>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>
