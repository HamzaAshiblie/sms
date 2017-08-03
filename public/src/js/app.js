var clientId = 0;
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
});

$('.panel').find('.div-body-modal').find('.table').find('.btn-group').find('.dropdown-menu').find('#edit-client-modal-btn').on('click', function(event){
    event.preventDefault();
    clientId = event.target.dataset['clientid'];
    $.ajax({
        method:'GET',
        url:urlGetClient,
        data:{
            client_id: clientId,
            _token: token}
    })
        .done(function (msg) {
            console.log(JSON.stringify(msg));
        });
   $('#edit-client-modal').modal();
});