import showAlert from '../scripts/alert.js'

let Award = (function () {
    let modalForm;
    let form;
    let submit;

    function modal() {
        modalForm = $('#modal-form-award');
        form = modalForm.find('form');
        submit = modalForm.find('[data-submit]');

        modalForm.on('show.bs.modal', function (e) {
            const invoker = $(e.relatedTarget);
            const url = invoker.data('url');
            if (url !== undefined) {
                modalForm.addClass('loading');
                submit.text('Update Changes');

                form.attr('action', url);
                form.find('[name=_method]').val('put');

                axios.get(url)
                    .then(function (response) {
                        modalForm.removeClass('loading');
                        modalForm.find('#title').val(response.data['title']);
                        modalForm.find('#category').val(response.data['category']);
                        modalForm.find('#awarded_in').val(response.data['awarded_in']);
                        modalForm.find('#location').val(response.data['location']);
                        modalForm.find('#description').val(response.data['description']);
                    })
                    .catch(function (error) {
                        modalForm.on('shown.bs.modal', function (e) {
                            modalForm.modal('hide');
                            showAlert('Something went wrong', error.toString());
                        });
                    });
            } else {
                modalForm.removeClass('loading');
                submit.text('Save Changes');

                form.attr('action', form.attr('action').replace(/\/[0-9]+$/, ''));
                form.find('[name=_method]').val('post');
            }
        });

        modalForm.on('hidden.bs.modal', function () {
            modalForm.find('#title').val('');
            modalForm.find('#category').val('');
            modalForm.find('#awarded_in').val((new Date()).getFullYear());
            modalForm.find('#location').val('');
            modalForm.find('#description').val('');
        })
    }

    function init() {
        modal();
    }

    return {
        init: init
    };
})();

export default Award