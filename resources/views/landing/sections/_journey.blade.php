<section id="experiences" class="pb-0">
    <div class="row justify-content-sm-between">
        <div class="col-sm-3 mb-3 text-center text-sm-right sr-profile">
            <p class="mb-0 section-heading-group"><strong>JOURNEY</strong></p>
            <small class="text-muted">Education and experiences</small>
        </div>
        <div class="col-sm-8">
            <div class="mb-4">
                <p class="text-primary sr-profile"><strong>EDUCATIONS</strong></p>
                <ul class="list-unstyled">
                    @foreach($educations as $education)
                        <li class="sr-profile">
                            <div class="row">
                                <div class="col-md-7">
                                    <p class="mb-1"><strong>{{ $education->degree }}</strong></p>
                                    <p class="text-muted mb-1 mb-md-3">
                                        {{ $education->institution }} - {{ $education->major }}
                                    </p>
                                </div>
                                <div class="col-md-5 text-md-right">
                                    <p class="mb-1">
                                        <strong>
                                            {{ $education->enter }} - {{ if_empty($education->graduate, __('Now')) }}
                                        </strong>
                                    </p>
                                    <p class="mb-4 mb-md-3">{{ $education->location }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-4">
                <p class="text-primary sr-profile"><strong>EXPERIENCES</strong></p>
                <ul class="list-unstyled">
                    @foreach($experiences as $experience)
                        <li class="mb-3 sr-profile">
                            <div class="row">
                                <div class="col-md-9">
                                    <p class="mb-1"><strong>{{ $experience->experience }}</strong></p>
                                    <p class="mb-1 text-primary">{{ $experience->occupation }}
                                        at {{ $experience->location }}</p>
                                </div>
                                <div class="col-md-3 text-md-right">
                                    <p class="mb-1">
                                        <strong>
                                            {{ $experience->start }} - {{ if_empty($experience->end, __('Now')) }}
                                        </strong>
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="text-muted">
                                        {{ $experience->description }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-4">
                <p class="text-primary sr-profile"><strong>ACHIEVEMENTS</strong></p>
                <ul class="list-unstyled">
                    @foreach($awards as $award)
                        <li class="mb-3 sr-profile">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="mb-1"><strong>{{ $award->title }} : {{ $award->category }}</strong></p>
                                    <p class="mb-1 text-primary">{{ $award->description }}</p>
                                </div>
                                <div class="col-md-4 text-md-right">
                                    <p class="mb-1"><strong>{{ $award->awarded_in }}</strong></p>
                                    <p class="text-muted mb-1">{{ $award->location }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>