<div id="wpfl_sidebar_left_margin"> 
<div class="remove_collapsing_margins"></div>
<div class="wpfl_sidebar_left_padding">
<div class="remove_collapsing_margins"></div>
<?php if(!TemplateToaster_theme_dynamic_sidebar(1)){
global $TemplateToaster_theme_widget_args;
extract($TemplateToaster_theme_widget_args);
echo ($before_widget.$before_title.''.$after_title);
get_search_form();
echo substr($after_widget,0,-3);
echo ($before_widget.$before_title.''.$after_title);
get_calendar();
echo substr($after_widget,0,-3);
}
?>
<div class="remove_collapsing_margins"></div>
 </div> 
</div>
