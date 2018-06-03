<div class="modal fade" id="modal-form-award">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>Award</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="{{ route('showcase.awards.store') }}" method="post" id="award-form" novalidate>
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="title">Award Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title of achievement" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Group or category of award" required>
                    </div>
                    <div class="form-group">
                        <label for="awarded_in">Awarded In</label>
                        <select class="custom-select" name="awarded_in" id="awarded_in" required>
                            @for($year = 1975; $year <= date('Y'); $year++)
                                <option value="{{ $year }}"{{ $year == date('Y') ? ' selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required placeholder="Institution or city you rewarded">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"
                                  placeholder="Detail of your award" rows="2" maxlength="500"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-submit="true" data-toggle="button" aria-pressed="false"
                        onclick="event.preventDefault(); document.getElementById('award-form').submit();">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>