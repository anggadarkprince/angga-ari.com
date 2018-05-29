@foreach($educations as $education)
    <div class="card box-shadow mb-4">
        <div class="card-body d-flex justify-content-start pr-3">
            <img src="{{ Storage::url('layouts/icons/book.svg') }}"
                 class="pr-3 mr-3 border-right d-none d-sm-block" style="width: 70px">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <a href="#modal-form-education" data-toggle="modal"
                       data-url="{{ route('showcase.educations.update', ['education' => $education->id]) }}"
                       class="text-strong mb-1">{{ $education->degree }}</a>
                    <div class="dropdown">
                        <a href="#" class="link-muted small" type="button" id="dropdownMenuButton"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item btn-edit" href="#modal-form-education" data-toggle="modal"
                               data-url="{{ route('showcase.educations.update', ['education' => $education->id]) }}">
                                <i class="icon-note mr-2"></i>Edit School
                            </a>
                            <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                               data-id="3" data-label="{{ $education->institution }}"
                               data-title="{{ $education->degree }}"
                               data-url="{{ route('showcase.educations.destroy', ['education' => $education->id]) }}">
                                <i class="icon-trash mr-2"></i>Delete
                            </a>
                        </div>
                    </div>
                </div>
                <p class="card-text mb-0">{{ $education->institution }} - {{ $education->major }}</p>
                <small class="text-muted mb-0">
                    {{ $education->location }} in {{ $education->enter }} - {{ if_empty($education->graduate, __('Now')) }}
                </small>
            </div>
        </div>
    </div>
@endforeach