@foreach($awards as $award)
    <div class="card box-shadow mb-4">
        <div class="card-body d-flex justify-content-start pr-3">
            <img src="{{ Storage::url('layouts/icons/trophy.svg') }}"
                 class="pr-3 mr-3 border-right d-none d-sm-block" style="width: 70px">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <a href="#" class="text-strong mb-1">{{ $award->title }}</a>
                    <div class="dropdown">
                        <a href="#" class="link-muted small" type="button" id="dropdownMenuButton"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item btn-edit" href="#modal-form-award" data-toggle="modal"
                               data-url="{{ route('showcase.awards.update', ['award' => $award->id]) }}">
                                <i class="icon-note mr-2"></i>Edit Award
                            </a>
                            <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                               data-id="{{ $award->id }}" data-label="{{ $award->title }}"
                               data-title="{{ $award->category }}"
                               data-url="{{ route('showcase.awards.destroy', ['award' => $award->id]) }}">
                                <i class="icon-trash mr-2"></i>Delete
                            </a>
                        </div>
                    </div>
                </div>
                <p class="card-text mb-0">{{ $award->category }}</p>
                <small class="text-muted mb-0">{{ $award->location }}, {{ $award->awarded_in }}</small>
            </div>
        </div>
    </div>
@endforeach