<div class="modal fade" id="modal-form-experience">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="{{ route('showcase.experiences.store') }}" method="post" id="experience-form" novalidate>
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="experience">Experience</label>
                        <input type="text" class="form-control" id="experience" name="experience"
                               placeholder="Activity title such as Internship, Freelance, Full Time Job" required>
                    </div>
                    <div class="form-group">
                        <label for="occupation">Job Position</label>
                        <input type="text" class="form-control" id="occupation" name="occupation"
                               placeholder="Job title or position" maxlength="100">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="start">From</label>
                                <select class="custom-select" name="start" id="start" required>
                                    @for($year = 1975; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <label for="end">Until</label>
                                <select class="custom-select" name="end" id="end" required>
                                    @for($year = 1975; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}"{{ $year == date('Y') ? ' selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                    <option value="" selected>Now</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Location or Place</label>
                        <input type="text" class="form-control" id="location" name="location"
                               placeholder="Company name or city location" required maxlength="300">
                    </div>
                    <div class="form-group">
                        <label for="description">Job Description</label>
                        <textarea class="form-control" id="description" name="description"
                                  placeholder="Detail of your job activity" rows="2" maxlength="500"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-submit="true" data-toggle="button" aria-pressed="false"
                        onclick="event.preventDefault(); document.getElementById('experience-form').submit();">
                    Save changes
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>