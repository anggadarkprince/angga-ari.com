function showAlert(title, message) {
    var modalAlert = $('#modal-alert');
    modalAlert.find('.modal-title').html(title);
    modalAlert.find('.modal-message').html(message);

    modalAlert.modal({
        backdrop: 'static',
        keyboard: false
    });
}

export default showAlert