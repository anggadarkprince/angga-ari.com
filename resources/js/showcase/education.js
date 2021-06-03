import showAlert from '../scripts/alert.js'

let Education = (function () {
    let modalForm;
    let form;
    let submit;

    function modal() {
        modalForm = $('#modal-form-education');
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
                        modalForm.find('#degree').val(response.data['degree']);
                        modalForm.find('#institution').val(response.data['institution']);
                        modalForm.find('#major').val(response.data['major']);
                        modalForm.find('#enter').val(response.data['enter']);
                        modalForm.find('#graduate').val(response.data['graduate']);
                        modalForm.find('#location').val(response.data['location']);
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
            modalForm.find('#degree').val(modalForm.find('#degree option:first').val());
            modalForm.find('#institution').val('');
            modalForm.find('#major').val('');
            modalForm.find('#enter').val((new Date()).getFullYear());
            modalForm.find('#graduate').val('');
            modalForm.find('#location').val('');
        })
    }

    function init() {
        modal();
    }

    return {
        init: init
    };
})();

export default Education