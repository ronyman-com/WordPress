/**
* CustomScripts.js 1.0.0
* @author TemplateToaster
**/
jQuery(document).ready(function () {
 
/* Button Style Script */
jQuery("#wp-submit").addClass("btn btn-default");
jQuery(".contact_file").addClass(" btn btn-md btn-default");
jQuery(".wpcf7-submit").addClass("pull-left float-left btn btn-md btn-default");
jQuery(".wpcf7-submit").attr("value", "Send Message");
if(jQuery('.wpcf7-file').length){
jQuery('.wpcf7-file').change(function(){
var parentdiv = jQuery(this).parent().closest(".form-group");
var value = this.value.replace( /C:\\fakepath\\/i, "" );
var divv = jQuery(parentdiv).find("span#upload-file");
jQuery(divv).text(value);
});
}
 
/* Continue Shopping Button Style Script */
if(jQuery('.button.wc-forward').length){
jQuery(".button.wc-forward").removeClass("button").addClass("btn btn-success").css('float','right');
}
 
/* Account details page Button class Script */
jQuery('form.woocommerce-EditAccountForm .woocommerce-Button.button').removeClass("button").addClass('btn btn-default');
 
/* Slideshow Function Call */
if(jQuery('#wpfl_slideshow_inner').length){
jQuery('#wpfl_slideshow_inner').TTSlider({
stopTransition:false ,
slideShowSpeed:4000, begintime:1000,cssPrefix: 'wpfl_'
});
}
/* Animation Function Call */
jQuery().TTAnimation({cssPrefix: 'wpfl_'});
 
/* Checkbox Script */
function checkoutbutton() {
var inputs = document.getElementsByTagName('input');
for (a = 0; a < inputs.length; a++) {
if (inputs[a].type == "checkbox") {
var id = inputs[a].getAttribute("id");
if (id==null){
id=  "checkbox" +a;
}
inputs[a].setAttribute("id",id);
inputs[a].style.visibility = 'hidden';
var container = document.createElement('div');
container.setAttribute("class", "wpfl_checkbox");
var label = document.createElement('label');
label.setAttribute("for", id);
if(jQuery(inputs[a]).parent(" .wpfl_checkbox").length == 0)
{
jQuery(inputs[a]).wrap(container).after(label);
}
}
}
}
jQuery(document).ajaxComplete(function () {
checkoutbutton();
});
jQuery(document).ready(function () {
checkoutbutton();
});

 
/* RadioButton Script */
function radiobutton() {
var inputs = document.getElementsByTagName('input');
for (a = 0; a < inputs.length; a++) {
if (inputs[a].type == "radio") {
var id = inputs[a].getAttribute("id");
if (id==null){
id=  "radio" +a;
}
inputs[a].setAttribute("id",id);
inputs[a].style.visibility = 'hidden';
var container = document.createElement('div');
container.setAttribute("class", "wpfl_radio");
var label = document.createElement('label');
label.setAttribute("for", id);
if(jQuery(inputs[a]).parent(" .wpfl_radio").length == 0)
{
jQuery(inputs[a]).wrap(container).after(label);
}
}
}
}
jQuery(document).ajaxComplete(function () {
radiobutton();
});
jQuery(document).ready(function () {
radiobutton();
});
 
/* -----StaticFooterScript ----*/
var window_height =  Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
var body_height = jQuery(document.body).height();
var content = jQuery("div[id$='content_margin']");
if(body_height < window_height){
differ = (window_height - body_height);
content_height = content.height() + differ;
jQuery("div[id*='content_margin']").css({"min-height":content_height+"px"});
}
 
/* -----HamburgerScript ----*/
jQuery('#nav-expander').on('click',function(e){
e.preventDefault();
jQuery('body').toggleClass('nav-expanded');
});
 
/* -----MenuOpenClickScript ----*/
jQuery('ul.wpfl_menu_items.nav li [data-bs-toggle=dropdown]').on('click', function() {
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
if (('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0)) {
if(jQuery(this).parent().hasClass('show')){
location.assign(jQuery(this).attr('href'));
}
} else {
if(window_width > 1199 && jQuery(this).attr('href')){
window.location.href = jQuery(this).attr('href'); 
}
else{
if(jQuery(this).parent().hasClass('show')){
location.assign(jQuery(this).attr('href'));
}
}
}
});
jQuery('.wpfl_menu_items_parent_link_arrow, .wpfl_menu_items_parent_link_active_arrow').on('click', function(e) {
e.preventDefault();
jQuery('.show.child').toggleClass('show');
jQuery(this).parent().toggleClass('show');
});
 
/* -----SidebarMenuOpenClickScript ----*/
jQuery('ul.wpfl_vmenu_items.nav li [data-bs-toggle=dropdown]').on('click', function() {
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
if(window_width > 1199 && jQuery(this).attr('href')){
window.location.href = jQuery(this).attr('href'); 
}
else{
if(jQuery(this).parent().hasClass('show')){
location.assign(jQuery(this).attr('href'));
}
}
});
jQuery('.wpfl_vmenu_items_parent_link_arrow, .wpfl_vmenu_items_parent_link_active_arrow').on('click', function(e) {
e.preventDefault();
jQuery('.show.child').toggleClass('show');
jQuery(this).parent().toggleClass('show');
});
 
/* -----SidebarMenuOpenClickScript ForNoStyle----*/
jQuery('ul.menu li [data-bs-toggle=dropdown]').on('click', function() {
	if(jQuery(this).parent().hasClass('show')){
	location.assign(jQuery(this).attr('href'));
	}
});
 
/*----- PageAlignment Script ------*/
var page_width = jQuery('#wpfl_page').width();
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width > 1199){
jQuery('.wpfl_page_align_left').each(function() {
var left_div_width = jQuery(this).width(); 
var page_align_left_value = page_width - left_div_width;
left_div_width = left_div_width + 1;
jQuery(this).css({'left' : '-' + page_align_left_value + 'px', 'width': left_div_width + 'px'});
});
jQuery('.wpfl_page_align_right').each(function() {
var right_div_width = jQuery(this).width(); 
var page_align_left_value = page_width - right_div_width;
right_div_width = right_div_width + 1;
jQuery(this).css({'right' : '-' + page_align_left_value + 'px', 'width': right_div_width + 'px'});
});
}
 
/* ---- TabClickScript ----*/
jQuery('.wpfl_menu_items ul.dropdown-menu [data-bs-toggle=dropdown]').on('click', function(event) { 
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width < 1200){
event.preventDefault();
event.stopPropagation();
jQuery(this).parent().siblings().removeClass('show');
jQuery(this).parent().toggleClass(function() {
if (jQuery(this).is(".show") ) {
window.location.href = jQuery(this).children("[data-bs-toggle=dropdown]").attr('href'); 
return "";
} else {
return "show";
}
});
}
});
 
/* ----- TabVMenuClickScript -----*/
jQuery('.wpfl_vmenu_items ul [data-bs-toggle=dropdown]').on('click', function(event) { 
var window_width =  Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(window_width < 1200){
event.preventDefault();
event.stopPropagation();
jQuery(this).parent().siblings().removeClass('show');
jQuery(this).parent().toggleClass(function() {
if (jQuery(this).is(".show") ) {
window.location.href = jQuery(this).children("[data-bs-toggle=dropdown]").attr('href'); 
return "";
} else {
return "show";
}
});
}
});
 
/* ----- TabVMenuClickScript ForNoStyle -----*/
jQuery('.menu ul [data-bs-toggle=dropdown]').on('click', function(event) {
event.preventDefault();
event.stopPropagation();
jQuery(this).parent().siblings().removeClass('show');
jQuery(this).parent().toggleClass(function() {
if (jQuery(this).is(".show") ) {
window.location.href = jQuery(this).children("[data-bs-toggle=dropdown]").attr('href'); 
return "";
} else {
return "show";
}
});
});
 
/* ----- GoogleWebFontScript -----*/
WebFontConfig = {
google: { families: [ 'Rosario:700'] }
};
(function() {
var wf = document.createElement('script');
wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})();
 
/*************** Html video script ***************/
var objects = ['iframe[src*="youtube.com"]','iframe[src*="youtu.be"]','iframe[src*="youtube-nocookie.com"]', 'object'];
for(var i = 0 ; i < objects.length ; i++){
if (jQuery(objects[i]).length > 0) {
jQuery(objects[i]).wrap( "<div class='embed-responsive embed-responsive-16by9'></div>" );
jQuery(objects[i]).addClass('embed-responsive-item');
}
}
});