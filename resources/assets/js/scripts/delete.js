(function ($) {
    var modalDelete = $('#modal-delete');
    var buttonDelete = modalDelete.find('[data-submit]');
    var buttonDismiss = modalDelete.find('[data-dismiss]');
    var form = modalDelete.find('form');

    buttonDelete.on('click', function () {
        form.submit();
    });

    $(document).on('click', '.btn-delete', function() {
        form.attr('action', $(this).data('url'));
        form.find('[name=id]').val($(this).data('id'));
        modalDelete.find('.delete-title').text($(this).data('title'));
        modalDelete.find('.delete-label').text($(this).data('label'));
    });

    buttonDismiss.on('click', function () {
        form.attr('action', '#');
        form.find('[name=id]').val('');
        form.find('.delete-title').text('');
        form.find('.delete-label').text('');
    });

})(jQuery);