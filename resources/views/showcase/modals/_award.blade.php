<div class="modal fade" id="modal-form-award">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>New Award</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Award Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title of achievement" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Group or category of award" required>
                    </div>
                    <div class="form-group">
                        <label for="from">Awarded In</label>
                        <select class="custom-select" name="from" id="from" required>
                            @for($year = 1980; $year <= date('Y'); $year++)
                                <option value="{{ $year }}"{{ old('year', date('year')) == date('year') ? ' selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Institution or city you rewarded">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>