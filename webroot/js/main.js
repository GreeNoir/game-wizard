$(function() {

    $('.dropdown-menu.lang ul.chosen-results').click(function() {
        resetTopNav();
    });

    if ($('div.input').length > 0) {
        $("div.input").addClass("form-group col-sm-10");
    }
});

function languageChange() {
    var select_lang = $('select[name="language"] option:selected').val();
    $('#language_form').submit();
}

function resetTopNav() {
    $('ul.top-nav li').removeClass('open');
}

function setMenuActive(controller) {
    $('nav.navbar ul li').removeClass('active');
    var tables = ['AccountCommon', 'Roledata'];
    if (tables.indexOf(controller) != -1) {
        $('nav.navbar ul#tables').addClass('in');
    }
    var reports = ['LoginLog'];
    if (reports.indexOf(controller) != -1) {
        $('nav.navbar ul#reports').addClass('in');
    }
    $('nav.navbar ul li[data-controller="'+controller+'"]').addClass('active');
}