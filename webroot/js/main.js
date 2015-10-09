var current_lang = '';

$(function() {
    $('select[name="language"]').change(function() {
        var select_lang = $('select[name="language"] option:selected').val();
        if (select_lang == current_lang) {
        } else {
            $('#language_form').submit();
        }
    });

    if ($('div.input').length > 0) {
        $("div.input").addClass("form-group col-sm-10");
    }
});

function setMenuActive(controller) {
    $('nav.navbar ul li').removeClass('active');
    var tables = ['AccountCommon', 'Roledata'];
    if (tables.indexOf(controller) != -1) {
        $('nav.navbar ul#tables').addClass('in');
    }
    $('nav.navbar ul li[data-controller="'+controller+'"]').addClass('active');
}