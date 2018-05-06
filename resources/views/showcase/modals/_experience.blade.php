<div class="modal fade" id="modal-form-experience">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>New Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Experience</label>
                        <input type="text" class="form-control" id="title" placeholder="Activity title such as Internship, Freelance, Full Time Job" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Job Position</label>
                        <input type="text" class="form-control" id="title" placeholder="Job title or position" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="from">From</label>
                                <select class="custom-select" name="from" id="from" required>
                                    @for($year = 1980; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}"{{ old('year', date('year')) == date('year') ? ' selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <label for="until">Until</label>
                                <select class="custom-select" name="until" id="until" required>
                                    @for($year = 1980; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}">
                                            {{ $year }}
                                        </option>
                                    @endfor
                                    <option value="now" selected>Now</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Company or city">
                    </div>
                    <div class="form-group">
                        <label for="description">Job Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Detail of your job activity" rows="2"></textarea>
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