
$(function() {
    $('select[name="language"]').change(function() {
        $('#language_form').submit();
    });
});

function setMenuActive(controller) {
    $('div.navbar ul.nav li').removeClass('active');
    $('div.navbar ul.nav li[data-controller="'+controller+'"]').addClass('active');

    if (controller == 'Home') {
        $('div.language_select').css('display', 'inline-block');
    }
}