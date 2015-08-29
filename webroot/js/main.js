
function setMenuActive(controller) {
    $('div.navbar ul.nav li').removeClass('active');
    $('div.navbar ul.nav li[data-controller="'+controller+'"]').addClass('active');
}