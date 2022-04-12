<?php
if (   ! is_active_sidebar( 'first-footer-widget-area'  ) && ! is_active_sidebar( 'second-footer-widget-area' ) && ! is_active_sidebar( 'third-footer-widget-area'  ))
return;
?>
<div class="footer-widget-area_fixed" role="complementary">
<div class="footerwidget row g-0" role="complementary">
<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
<div id="first" class="widget-area col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
<?php TemplateToaster_theme_dynamic_sidebar( 'first-footer-widget-area' ); ?>
</div>
<div class=" visible-xs d-block" style="clear:both;width:0px;"></div>
<?php else: ?>
<div id="first" class="widget-area  col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
&nbsp;
</div>
<div class=" visible-xs d-block" style="clear:both;width:0px;"></div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
<div id="second" class="widget-area col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
<?php TemplateToaster_theme_dynamic_sidebar( 'second-footer-widget-area' ); ?>
</div>
<div class=" visible-xs d-block" style="clear:both;width:0px;"></div>
<?php else: ?>
<div id="second" class="widget-area col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
&nbsp;
</div>
<div class=" visible-xs d-block" style="clear:both;width:0px;"></div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
<div id="third" class="widget-area col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
<?php TemplateToaster_theme_dynamic_sidebar( 'third-footer-widget-area' ); ?>
</div>
<div class=" visible-lg visible-md visible-sm visible-xs d-xxl-block d-xl-block d-lg-block d-md-block d-sm-block d-block" style="clear:both;width:0px;"></div>
<?php else: ?>
<div id="third" class="widget-area col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
&nbsp;
</div>
<div class=" visible-lg visible-md visible-sm visible-xs d-xxl-block d-xl-block d-lg-block d-md-block d-sm-block d-block"></div>
<?php endif; ?>
<div style="clear: both;width:0px;"></div>
</div>
