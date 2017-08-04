﻿var clientId = 0;
var clientNameElement = null;
var clientCompanyElement = null;
var clientEmailElement = null;
var clientPhoneElement = null;
var classNav = null;
if(navClass != null)
{
    classNav = navClass;
    $(classNav).addClass('active');
    $('.liClass').addClass('active');
}else{
    var navClass = null;
}


console.log(navClass);
$('.panel').find('.div-body-modal').find('.div-add-client-modal').find('#add-client-modal-btn').on('click', function(event){
    event.preventDefault();
    $('#addClientsModal').modal();
});

$('#add_client_modal_save').on('click', function () {
    $.ajax({
        method: 'POST',
        url:urlAddClient,
        data:{
            client_name: $('#client_name').val(),
            client_company: $('#client_company').val(),
            client_email: $('#client_email').val(),
            client_phone: $('#client_phone').val(),
            _token: token}
    });
    $('#addClientsModal').modal('hide');
});
$('.panel').find('.div-body-modal').find('.table').find('.btn-group').find('.dropdown-menu').find('#edit-client-modal-btn').on('click', function(event){
    event.preventDefault();
    clientId = event.target.dataset['clientid'];
    clientNameElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[1];
    clientCompanyElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[3];
    clientEmailElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[5];
    clientPhoneElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[7];
    var clientName = clientNameElement.textContent;
    var clientCompany = clientCompanyElement.textContent;
    var clientEmail = clientEmailElement.textContent;
    var clientPhone = clientPhoneElement.textContent;
    $('#edit-client_name').val(clientName);
    $('#edit-client_company').val(clientCompany);
    $('#edit-client_email').val(clientEmail);
    $('#edit-client_phone').val(clientPhone);
    $('#edit-client-modal').modal();
});

$('#edit-clients-btn').on('click', function () {
    $.ajax({
        method:'post',
        url:urlEditClient,
        data:{client_name: $('#edit-client_name').val(), client_company: $('#edit-client_company').val(), client_email: $('#edit-client_email').val(), client_phone: $('#edit-client_phone').val(), id: clientId, _token: token}
    }).done(function (msg) {
        $(clientNameElement).text(msg['client_name']);
        $(clientCompanyElement).text(msg['client_company']);
        $(clientEmailElement).text(msg['client_email']);
        $(clientPhoneElement).text(msg['client_phone']);
        $('#edit-client-modal').modal('hide');
    });
});
