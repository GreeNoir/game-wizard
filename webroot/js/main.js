$(function() {

    $('.dropdown-menu.lang ul.chosen-results').click(function() {
        resetTopNav();
    });

    if ($('form div.input').length > 0) {
        $('form div.input').addClass("form-group");
    }

    if ($('form.form-inline div.input').length > 0) {
        $('form.form-inline div.input').addClass("col-xs-3");
    }

    if ($('form:not(.form-inline) div.input').length > 0) {
        $('form:not(.form-inline) div.input').addClass("col-sm-10");
    }

    $('[data-toggle="tooltip"]').tooltip();

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
    var tables = ['AccountCommon', 'Roledata', 'Family'];
    if (tables.indexOf(controller) != -1) {
        $('nav.navbar ul#tables').addClass('in');
    }

    var equipment = ['Equipment'];
    if (equipment.indexOf(controller) != -1) {
        $('nav.navbar ul#equipment').addClass('in');
    }

    var reports = ['LoginLog'];
    if (reports.indexOf(controller) != -1) {
        $('nav.navbar ul#reports').addClass('in');
    }
    $('nav.navbar ul li[data-controller="'+controller+'"]').addClass('active');
}

function findOwners() {
    $('.find_progress').css('display', 'inline-block');
    $('#find_results').empty();
    var serialNum = $('#serialNum').val();
    var select_lang = $('select[name="language"] option:selected').val();
    $.get('/' + select_lang + '/Equipment/find?serialNum='+serialNum, function(data){
        $('#find_results').html(data);
        $('.find_progress').hide();
    });
}

function initEquipment(roledataAccountsList) {
    $('table.equip select#equipType').change(function(){
        $('input[name=subaction]').val('change');
        $('form#equipment_item').submit();
    });

    $('#equipType').chosen();

    $('.copy_item').click(function(){
        $('input[name=serial]').val($(this).data('serial'));
        $('input[name=typeID]').val($(this).data('typeid'));
        $('select[name=account]').val(0);
        $('select[name=roledata]').val(0);
        $('input[name=count]').val(1);
    });

    $('select[name=account]').change(function(){
        initAccountRoledataList($(this).val(), roledataAccountsList);
    });
}

function initAccountRoledataList(accountID, roledataAccountsList) {
    var originalRoleId = $('input[name=originalRoleId]').val();
    $('select[name=roledata]').empty().append('<option selected="selected" value="0">'+$('input[name=empty_option]').val()+'</option>');
    for(var i=0; i<roledataAccountsList[accountID].length; i++) {
        var className = '';
        if (roledataAccountsList[accountID][i].RoleID == originalRoleId) {
            className = 'current';
        }
        $('select[name=roledata]').append('<option class="'+className+'" value="'+roledataAccountsList[accountID][i].RoleID+'">'+roledataAccountsList[accountID][i].RoleName+'</option>')
    }
}

function addEquipment() {
    var originalRoleId = $('input[name=originalRoleId]').val();
    var serialNum = $('input[name=serial]').val();
    var typeID = $('input[name=typeID]').val();
    var accountID = $('select[name=account]').val();
    var roleID = $('select[name=roledata]').val();
    var count = $('input[name=count]').val();
    var select_lang = $('select[name="language"] option:selected').val();
    $.post('/' + select_lang + '/Equipment/addRoledataEquipment', {serial: serialNum, typeID: typeID, accountID: accountID, roleID: roleID, count: count}, function(data) {
        var result = JSON.parse(data);
        alert('Equipment with SerialNum #'+ result.SerialNum +' appended to RoleID# '+roleID);
        if (roleID == originalRoleId) {
            window.location.reload();
        }
    });
}

function initMembers(roledataAccountsList) {
    $('select[name=account]').change(function(){
        initAccountRoledataList($(this).val(), roledataAccountsList);
    });
}

function addMembers() {
}