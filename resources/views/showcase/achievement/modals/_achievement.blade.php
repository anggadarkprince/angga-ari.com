<div class="modal fade" id="modal-form-achievement">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border">
                <h5 class="modal-title">New Achievement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body my-2">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#modal-form-education" class="card d-flex flex-row flex-sm-column link-muted mb-3" data-dismiss="modal" data-toggle="modal">
                            <div class="card-body">
                                <img src="{{ Storage::url('layouts/icons/book.svg') }}" style="min-width: 50px">
                            </div>
                            <div class="card-footer d-flex align-items-center w-100">
                                <small class="mx-auto">EDUCATION</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#modal-form-experience" class="card d-flex flex-row flex-sm-column link-muted mb-3" data-dismiss="modal" data-toggle="modal">
                            <div class="card-body">
                                <img src="{{ Storage::url('layouts/icons/note-check.svg') }}" style="min-width: 50px">
                            </div>
                            <div class="card-footer text-center d-flex align-items-center w-100">
                                <small class="mx-auto">EXPERIENCE</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#modal-form-award" class="card d-flex flex-row flex-sm-column link-muted mb-3" data-dismiss="modal" data-toggle="modal">
                            <div class="card-body">
                                <img src="{{ Storage::url('layouts/icons/trophy.svg') }}" style="min-width: 50px">
                            </div>
                            <div class="card-footer text-center d-flex align-items-center w-100">
                                <small class="mx-auto">AWARD</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>