import showAlert from '../scripts/alert.js'

let Category = (function () {
    let modalForm;
    let form;
    let submit;

    function order() {
        var categoryWrapper = $('.category-wrapper');

        if (categoryWrapper.length) {
            Sortable.create(categoryWrapper[0], {
                animation: 150,
                draggable: ".category-item",
            });
        }
    }

    function modal() {
        modalForm = $('#modal-form-category');
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
                        modalForm.find('#term').val(response.data['term']);
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
            modalForm.find('#term').val('');
            modalForm.find('#description').val('');
        })
    }

    function init() {
        modal();
        order();
    }

    return {
        init: init
    };
})();

export default Category