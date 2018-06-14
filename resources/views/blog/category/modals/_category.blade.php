<div class="modal fade" id="modal-form-category">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="{{ route('blog.category.store') }}" method="post" id="category-form" novalidate>
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="term">Category</label>
                        <input type="text" class="form-control" id="term" name="term" placeholder="Category title"
                               maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" maxlength="500"
                                  placeholder="Detail description category about"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured">Featured Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="featured">
                            <label class="custom-file-label" for="featured">Choose file</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-submit="true" data-toggle="button" aria-pressed="false"
                        onclick="event.preventDefault(); document.getElementById('category-form').submit();">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>