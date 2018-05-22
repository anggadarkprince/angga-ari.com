@include('errors._general')

@include('errors._message')

<form action="{{ route('contact.save') }}" role="form" class="mt-2" novalidate method="post">
    @csrf
    <div class="form-group">
        <input type="text" value="{{ old('name') }}" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Your name" required>
        @if($errors->first('name'))
            <span class="invalid-feedback">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" placeholder="Your email" value="{{ old('email') }}" id="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}" name="email" required>
                @if($errors->first('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="url" placeholder="Your website" value="{{ old('website') }}" id="website" class="form-control{{ $errors->first('website') ? ' is-invalid' : '' }}" name="website">
                @if($errors->first('website'))
                    <span class="invalid-feedback">{{ $errors->first('website') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control{{ $errors->first('message') ? ' is-invalid' : '' }}" id="message" name="message" placeholder="Your message" rows="5" required>{{ old('message') }}</textarea>
        @if($errors->first('message'))
            <span class="invalid-feedback">{{ $errors->first('message') }}</span>
        @endif
    </div>
    <div class="form-group text-center">
        <button class="btn btn-lg btn-primary mt-2" id="submit" type="submit">
            Send Message
        </button>
    </div>
</form>