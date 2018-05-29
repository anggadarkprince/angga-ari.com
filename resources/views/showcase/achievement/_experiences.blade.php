@foreach($experiences as $experience)
    <div class="card box-shadow mb-4">
        <div class="card-body d-flex justify-content-start pr-3">
            <img src="{{ Storage::url('layouts/icons/note-check.svg') }}"
                 class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="height: 50px">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <a href="#modal-form-experience" data-toggle="modal"
                       data-url="{{ route('showcase.experiences.update', ['experience' => $experience->id]) }}"
                       class="text-strong mb-1">{{ $experience->experience }}</a>
                    <div class="dropdown">
                        <a href="#" class="link-muted small" type="button" id="dropdownMenuButton"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item btn-edit" href="#modal-form-experience" data-toggle="modal"
                               data-url="{{ route('showcase.experiences.update', ['experience' => $experience->id]) }}">
                                <i class="icon-note mr-2"></i>Edit Experience
                            </a>
                            <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                               data-id="3" data-label="{{ $experience->occupation }}"
                               data-title="{{ $experience->experience }}"
                               data-url="{{ route('showcase.experiences.destroy', ['experience' => $experience->id]) }}">
                                <i class="icon-trash mr-2"></i>Delete
                            </a>
                        </div>
                    </div>
                </div>
                <p class="card-text text-muted mb-1">{{ $experience->occupation }}</p>
                <p class="card-text mb-1">
                    {{ $experience->description }}
                </p>
                <small class="text-muted mb-0">
                    {{ $experience->location }} in {{ $experience->start }} - {{ if_empty($experience->end, __('Now')) }}
                </small>
            </div>
        </div>
    </div>
@endforeach