import showAlert from './alert.js'

let Skill = (function () {
    let modalForm;
    let form;
    let submit;

    function order() {
        var skillWrapper = $('.skill-wrapper');

        if (skillWrapper.length) {
            Sortable.create(skillWrapper[0], {
                animation: 150,
                draggable: ".skill-item",
            });
        }
    }

    function modal() {
        modalForm = $('#modal-form-skill');
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
                        modalForm.find('#field').val(response.data['field']);
                        modalForm.find('#expertise').val(response.data['expertise']);
                        modalForm.find('#description').val(response.data['description']);
                        modalForm.find('[name=proficiency_level][value=' + response.data['proficiency_level'] + ']').prop('checked', true);
                    })
                    .catch(function (error) {
                        modalForm.on('shown.bs.modal', function () {
                            modalForm.modal('hide');
                            showAlert('Something went wrong', error.toString());
                        });
                    });
            } else {
                modalForm.removeClass('loading');
                submit.text('Save Changes');

                form.attr('action', form.attr('action').replace('/\/[0-9]+$/', ''));
                form.find('[name=_method]').val('post');
            }
        });

        modalForm.on('hidden.bs.modal', function () {
            modalForm.find('#field').val(modalForm.find('#field option:first').val());
            modalForm.find('#expertise').val('');
            modalForm.find('#description').val('');
            modalForm.find('[name=proficiency_level][value=60]').prop('checked', true);
        })
    }

    function init() {
        order();
        modal();
    }

    return {
        init: init
    };
})();

export default Skill