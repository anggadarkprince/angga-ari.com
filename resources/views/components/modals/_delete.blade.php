<div class="modal fade" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-trash mr-2"></i>Delete <span class="delete-title"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="#" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id">
                    <p class="mb-0">Are you sure want to delete <strong class="delete-label"></strong>?</p>
                    <small class="text-gray-500 mb-2">This action is irreversible, proceed with careful.</small>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-submit="true" data-toggle="button" aria-pressed="false" autocomplete="off">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>