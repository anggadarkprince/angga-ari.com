@if (count($errors) > 0)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p class="mb-1"><strong>Whoops, something went wrong!</strong></p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="mb-1" style="padding-left: 17px">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif