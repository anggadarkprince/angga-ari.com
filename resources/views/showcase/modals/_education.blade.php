<div class="modal fade" id="modal-form-education">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>New Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category">Education Degree</label>
                        <select class="custom-select" name="category" id="category" required>
                            <option value="PhD">PhD</option>
                            <option value="master">Master</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="high school">High School</option>
                            <option value="junior">Junior High School</option>
                            <option value="elementary">Elementary School</option>
                            <option value="course">Special Course</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Institution</label>
                        <input type="text" class="form-control" id="title" placeholder="Institution name or brand" required>
                    </div>
                    <div class="form-group">
                        <label for="major">Major</label>
                        <input type="text" class="form-control" id="major" placeholder="Expertise of what you learning" required>
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
                        <input type="text" class="form-control" id="location" placeholder="City or country of your institution">
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