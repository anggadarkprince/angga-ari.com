<section id="skills" class="pb-0">
    <div class="row justify-content-sm-between">
        <div class="col-sm-3 mb-3 text-center text-sm-right sr-profile">
            <p class="mb-0 section-heading-group"><strong>EXPERTISE</strong></p>
            <small class="text-muted">Every detail of skills</small>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <?php $order = 1 ?>
                @foreach($user->skills as $skill)
                    <div class="col-lg-6 mb-5">
                        <div class="row sr-profile">
                            <div class="col-1">
                                <strong class="text-gray-400">
                                    {{ str_pad($order, 2, '0', STR_PAD_LEFT) }}
                                </strong>
                            </div>
                            <div class="col-11">
                                <p><strong>{{ $skill->expertise }}</strong></p>
                                <p class="skill-description">{{ $skill->description }}</p>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-2">
                                        <strong class="text-primary">{{ $skill->proficiency_level }}%</strong>
                                    </div>
                                    <div class="col-10">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: {{ $skill->proficiency_level }}%" aria-valuenow="{{ $skill->proficiency_level }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($order % 2 == 0)
                        <div class="w-100"></div>
                    @endif
                    <?php $order++ ?>
                @endforeach
            </div>
        </div>
    </div>
</section>