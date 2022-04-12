/**
 * WidgetForm.js 1.0.0
 * @author TemplateToaster
 * GPL Licensed
 */
function select_widget(obj) {

    (function () {

        var parent = jQuery(obj).parent();
        var name = parent.attr('class');
        jQuery('.' + name).prop('checked', true);
        jQuery('#' + name + 'savewidget').prop('disabled', false);
        jQuery('#' + name + 'savewidget').prop('value', 'Save');
    })();
}

function unselect_widget(obj) {

    (function () {

        var parent = jQuery(obj).parent();
        var name = parent.attr('class');
        jQuery('.' + name).prop('checked', false);
        jQuery('#' + name + 'savewidget').prop('disabled', false);
        jQuery('#' + name + 'savewidget').prop('value', 'Save');
    })();
}
        