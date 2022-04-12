<?php
/**
* The template for displaying 404 pages (not found).
*
* @package TemplateToaster
*/
if(TemplateToaster_theme_option('ttr_error_home_redirect')):
header('Location:'.home_url());
endif;
get_header(); ?>
<div id="wpfl_content_and_sidebar_container">
<div id="wpfl_content">
<div id="wpfl_content_margin">
<div class="remove_collapsing_margins"></div>
<?php if (TemplateToaster_theme_option("ttr_page_breadcrumb")):?>
<?php TemplateToaster_wordpress_breadcrumbs(); ?>
<?php endif; ?>
<?php
if( is_active_sidebar( 'contenttopcolumn1'  ) || is_active_sidebar( 'contenttopcolumn2'  ) || is_active_sidebar( 'contenttopcolumn3'  ) || is_active_sidebar( 'contenttopcolumn4'  )):
?>
<div class="wpfl_topcolumn_widget_container"> <!-- _widget_container-->
<div class="contenttopcolumn0">
<?php if ( is_active_sidebar('contenttopcolumn1') ) : ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="topcolumn1"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('contenttopcolumn2') ) : ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="topcolumn2"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('contenttopcolumn3') ) : ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="topcolumn3"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('contenttopcolumn4') ) : ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="topcolumn4"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CAWidgetArea03'); ?>
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
<?php if(TemplateToaster_theme_option('ttr_error_message')): ?>
<h1><?php echo TemplateToaster_theme_option('ttr_error_message_heading'); ?></h1>
<div class="postcontent">
<p><?php echo TemplateToaster_theme_option('ttr_error_message_content'); ?></p>
<?php endif; ?>
<?php if( TemplateToaster_theme_option('ttr_error_search_box')):?>
<?php get_search_form(); ?>
<br/><br/>
<?php endif; ?>
<?php if(TemplateToaster_theme_option('ttr_error_image_enable')): ?>
<div>
<input type="image" height="<?php echo TemplateToaster_theme_option('ttr_error_image_height');?>px" width="<?php echo TemplateToaster_theme_option('ttr_error_image_width');?>px" alt="Error Image" src="<?php if(TemplateToaster_theme_option('ttr_error_image')): echo TemplateToaster_theme_option('ttr_error_image') ; else: echo esc_url( get_template_directory_uri() ).'/images/gototop0.png'; endif; ?>"/>
</div>
<?php endif; ?>
<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
<div class="widget">
<br/>
	<h2><?php _e( 'Most Used Categories', 'wpflavour' ); ?></h2>
<ul>
<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
</ul>
<br/>
</div>
<?php
$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'wpflavour' ), convert_smilies( ':)' ) ) . '</p>';
the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
?>
<br/>
<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
<div style="clear: both;"></div>
</div>
<?php
if( is_active_sidebar( 'contentbottomcolumn1'  ) || is_active_sidebar( 'contentbottomcolumn2'  ) || is_active_sidebar( 'contentbottomcolumn3'  ) || is_active_sidebar( 'contentbottomcolumn4'  )):
?>
<div class="wpfl_bottomcolumn_widget_container"> <!-- _widget_container-->
<div class="contentbottomcolumn0">
<?php if ( is_active_sidebar('contentbottomcolumn1') ) : ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="bottomcolumn1"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea00'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell1 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('contentbottomcolumn2') ) : ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="bottomcolumn2"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea01'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell2 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" d-lg-block visible-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('contentbottomcolumn3') ) : ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="bottomcolumn3"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea02'); ?>
</div>
</div> <!-- top child column close-->
</div>  <!-- topcell column-->
<?php else: ?>
<div class="cell3 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 transparent">
&nbsp;
</div> <!-- topcell 2 column-->
<?php endif; ?>
<div class=" visible-xs-block d-block" style="clear:both;width:0px;"></div>
<?php if ( is_active_sidebar('contentbottomcolumn4') ) : ?>
<div class="cell4 col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12">
<div>
<div class="bottomcolumn4"> <!-- top child column-->
<?php templatetoaster_theme_dynamic_sidebar( 'CBWidgetArea03'); ?>
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
<div class="remove_collapsing_margins"></div>
</div>
</div>
<div style="clear: both;"></div>
</div>
<?php get_footer(); ?>