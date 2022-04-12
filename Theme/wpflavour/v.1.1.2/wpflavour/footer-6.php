<?php
/**
* The template for displaying the footer.
*
* @package TemplateToaster
*/
?>
<?php $theme_path = get_template_directory_uri(); 
$theme_path_content = get_template_directory_uri().'/content'; ?>
<div class="footer-widget-area" role="complementary">
<div class="footer-widget-area_inner">
</div>
</div>
<div class="remove_collapsing_margins"></div>
<?php $postid = ( isset( $post->ID ) ? get_the_ID() : NULL );
$var = get_post_meta ( $postid, 'ttr_page_foot_checkbox', true );
if($var == "true" || $var == ""):?>
<footer id="wpfl_footer">
<div class="margin_collapsetop"></div>
<div id="wpfl_footer_inner">
<?php
if( is_active_sidebar( 'footercellcolumn1'  ) || is_active_sidebar( 'footercellcolumn2'  ) || is_active_sidebar( 'footercellcolumn3'  ) || is_active_sidebar( 'footercellcolumn4'  )):
?>
<div class="wpfl_footer-widget-cell_inner_widget_container"> <!-- _widget_container-->
<div class="wpfl_footer-widget-cell_inner0 container row g-0">
<?php if ( is_active_sidebar('footercellcolumn1') ) : ?>
<div class="cell1 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
<div>
<div class="footercellcolumn1">
<?php templatetoaster_theme_dynamic_sidebar( 'abc00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('footercellcolumn2') ) : ?>
<div class="cell2 col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
<div>
<div class="footercellcolumn2">
<?php templatetoaster_theme_dynamic_sidebar( 'abc11'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('footercellcolumn3') ) : ?>
<div class="cell3 col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
<div>
<div class="footercellcolumn3">
<?php templatetoaster_theme_dynamic_sidebar( 'abc02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<?php if ( is_active_sidebar('footercellcolumn4') ) : ?>
<div class="cell4 col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12">
<div>
<div class="footercellcolumn4">
<?php templatetoaster_theme_dynamic_sidebar( 'abc23'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell4 col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-4 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<div class="d-xxl-block d-xl-block visible-lg-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
</div> <!-- top column-->
</div> <!-- _widget_container-->
<div style="clear: both;"></div>
<?php endif; ?>
<div id="wpfl_footer_top_for_widgets">
<div class="wpfl_footer_top_for_widgets_inner">
<?php get_sidebar( 'footer' ); ?>
</div>
</div>
<div class="wpfl_footer_bottom_footer">
<div class="wpfl_footer_bottom_footer_inner">
<div class="wpfl_footer_element_alignment container g-0">
</div>
<div class="wpfl_footershape1">
<div class="html_content"><br /><p><span style="font-family:'PT Sans','Arial';font-style:normal;font-weight:400;font-size:1em;color:rgba(51,51,51,1);"><a href="<?php echo get_permalink( get_page_by_path('privacy') );?>" target="_blank" class="tt_link" target="_blank" style="font-family:'<String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;>&amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;gt;Arial&amp;lt;/String&amp;gt;</String>';color:rgba(255,0,0,1);"><span style="color:rgba(255,255,255,1);">Privacy</span></a><span style="color:rgba(255,255,255,1);"> | </span><a href="<?php echo get_permalink( get_page_by_path('terms') );?>" target="_blank" class="tt_link" target="_blank" style="font-family:'<String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;>&amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;gt;Arial&amp;lt;/String&amp;gt;</String>';color:rgba(255,0,0,1);"><span style="color:rgba(255,255,255,1);">Terms</span></a></span></p><br /></div>
</div>
<div id="wpfl_footer_designed_by_links">
<?php $footer_designedbylink_URL = templatetoaster_theme_option('ttr_designedby_link_url'); 
$footer_designedby_link = templatetoaster_theme_option('ttr_designedby_link'); ?>
<?php $footer_link="https://www.ronyman.com"?>
<?php  if((empty( $footer_link)) && (empty($footer_designedbylink_URL))){ ?>
<span>
<?php echo $footer_designedby_link; ?>
</span>
<?php }else { ?>
<a href="<?php echo $footer_designedbylink_URL;   ?>">
<?php echo $footer_designedby_link; ?>
</a>
<?php } ?>
<span id="wpfl_footer_designed_by">
<?php  $footer_designedby_text = templatetoaster_theme_option('ttr_deisgnedby_text'); 
echo $footer_designedby_text;
?>
</span>
</div>
</div>
</div>
</div>
</footer>
<?php endif; ?>
<div class="remove_collapsing_margins"></div>
<div class="footer-widget-area" role="complementary">
<div class="footer-widget-area_inner">
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>