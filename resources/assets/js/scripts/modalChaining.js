export default function () {
    // sequential modal calling never wait one of another, that cause layout vertical calculation problem,
    // we need to wait until last modal is completely hidden, then we trigger another modal to be shown.
    // first cancel modal by checking the trigger button that has 2 data-toggle attribute which is launch and dismiss
    // modals at once, collect modal target by href or data-target attribute, then register hidden.bs.modal to wait
    // current modal CSS animation to finish, then launch next target modal.
    $('[data-toggle="modal"][data-dismiss]').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var targetModal = $(this).attr('href');
        if ($(this).data('target') !== undefined) {
            targetModal = $(this).data('target');
        }

        // this variable help us to prevent unexpected modal being shown when we dismiss current active modal
        // because event hidden.bs.modal does not really know source button which trigger another modal.
        var triggerNextModal = true;

        $(this).closest('.modal').modal('hide')
            .off('hidden.bs.modal')
            .on('hidden.bs.modal', function () {
                // this event may triggered whenever modal is closed
                // variable targetModal also may contain last target modal which is triggered before
                // when those conditions are met, unexpected modal will be shown when we click X button
                // or click outside modal dialog to dismiss the modal, the we need to check if the button
                // does trigger another modal or not.
                if(triggerNextModal) {
                    triggerNextModal = false;
                    $(targetModal).modal('show');
                }
            });
    });
}