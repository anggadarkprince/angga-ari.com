import showAlert from '../scripts/alert.js'

let Experience = (function () {
    let modalForm;
    let form;
    let submit;

    function modal() {
        modalForm = $('#modal-form-experience');
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
                        modalForm.find('#experience').val(response.data['experience']);
                        modalForm.find('#occupation').val(response.data['occupation']);
                        modalForm.find('#start').val(response.data['start']);
                        modalForm.find('#end').val(response.data['end']);
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
            modalForm.find('#experience').val('');
            modalForm.find('#occupation').val('');
            modalForm.find('#start').val((new Date()).getFullYear());
            modalForm.find('#end').val('');
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

export default Experience