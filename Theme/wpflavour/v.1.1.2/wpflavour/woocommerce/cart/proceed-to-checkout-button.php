<?php /**
* Proceed to checkout button
* @version 2.4.0
*/ ?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
exit;
}
?>
<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="btn btn-success">
<?php esc_html_e( 'Proceed to Checkout', 'wpflavour' ); ?>
</a>
