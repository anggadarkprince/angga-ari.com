<div class="modal fade" id="modal-form-skill">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>Create New Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category">Expertise Field</label>
                        <select class="custom-select" name="category" id="category">
                            <option value="communication">Communication</option>
                            <option value="design">Design</option>
                            <option value="engineering">Engineering</option>
                            <option value="finance">Finance</option>
                            <option value="medical">Medical</option>
                            <option value="music">Music</option>
                            <option value="programming">Programming</option>
                            <option value="sport">Sport</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Skill Level</label>
                        <div>
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="level" id="level_20" value="20">
                                <label class="custom-control-label" for="level_20">Nob</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="level" id="level_40" value="40">
                                <label class="custom-control-label" for="level_40">Novice</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="level" id="level_60" value="60" checked>
                                <label class="custom-control-label" for="level_60">Fair</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="level" id="level_80" value="80">
                                <label class="custom-control-label" for="level_80">Good</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block">
                                <input class="custom-control-input" type="radio" name="level" id="level_100" value="100">
                                <label class="custom-control-label" for="level_100">Expert</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title">Skill Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Your skill label" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Detail of your expertise" rows="2"></textarea>
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