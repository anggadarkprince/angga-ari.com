<div class="modal fade" id="modal-form-education">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="{{ route('showcase.educations.store') }}" method="post" id="education-form" novalidate>
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="degree">Education Degree</label>
                        <select class="custom-select" name="degree" id="degree" required>
                            @foreach(\App\Education::DEGREES as $degree)
                                <option value="{{ $degree }}">{{ $degree }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="institution">Institution</label>
                        <input type="text" class="form-control" id="institution" name="institution"
                               placeholder="Institution name or brand" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="major">Major</label>
                        <input type="text" class="form-control" id="major" name="major"
                               placeholder="Expertise of what you learning" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="enter">Enter</label>
                                <select class="custom-select" name="enter" id="enter" required>
                                    @for($year = 1975; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}"{{ $year == date('Y') ? ' selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <label for="graduate">Graduate</label>
                                <select class="custom-select" name="graduate" id="graduate" required>
                                    @for($year = 1980; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                    <option value="" selected>Now</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location"
                               placeholder="City or country of your institution" required maxlength="300">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-submit="true" data-toggle="button" aria-pressed="false"
                        onclick="event.preventDefault(); document.getElementById('education-form').submit();">
                    Save changes
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>