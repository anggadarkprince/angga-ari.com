@extends('layouts.print')

@section('title', $user->name)

@section('document')

    <p class="text-wide">CURRICULUM VITAE</p>

    <div class="clearfix mb-3">
        <img src="{{ storage_path('app/public/' . $user->avatar) }}" class="rounded mt-2 mr-5 float-left"
             style="width: 120px">
        <div class="float-left" style="margin-right: 140px">
            <h3 class="text-primary mb-0">{{ strtoupper($user->name) }}</h3>
            <p class="text-wide text-gray-500 mb-2">{{ $user->setting('showcase.tagline') }}</p>
            <p class="text-muted">{{ $user->setting('showcase.subtagline') }}</p>
        </div>
    </div>

    <hr class="separator">

    <table class="w-100 mb-3">
        <tr>
            <td class="p-2" width="33%">
                <strong class="text-primary">CONTACT</strong>
                <p class="small mb-0">{{ $user->setting('showcase.contact') }}</p>
            </td>
            <td class="p-2" width="33%">
                <strong class="text-primary">EMAIL</strong>
                <p class="small mb-0">{{ $user->setting('showcase.email') }}</p>
            </td>
            <td class="p-2" width="34%">
                <strong class="text-primary">WEBSITE</strong>
                <p class="small mb-0">{{ $user->setting('showcase.website') }}</p>
            </td>
        </tr>
        <tr>
            <td class="p-2">
                <strong class="text-primary">GENDER</strong>
                <p class="small mb-0">{{ strtoupper($user->gender) }}</p>
            </td>
            <td class="p-2">
                <strong class="text-primary">BIRTHDAY</strong>
                <p class="small mb-0">{{ format_date($user->birthday, 'd F Y') }}</p>
            </td>
            <td class="p-2">
                <strong class="text-primary">ADDRESS</strong>
                <p class="small mb-0">{{ $user->location }}</p>
            </td>
        </tr>
    </table>

    <hr class="separator mb-4">

    <p class="lead mb-1 text-wide text-primary">PERSONAL</p>
    <div class="mb-4 text-justify">{!! nl2br($user->setting('showcase.identity')) !!}</div>

    <p class="lead mb-1 text-wide text-primary">PROFESSIONAL PROFILE</p>
    <div class="mb-4 text-justify">{!! nl2br($user->setting('showcase.profile')) !!}</div>

    <p class="lead mb-1 text-wide text-primary">EDUCATIONS</p>
    <table class="w-100 mb-4">
        <?php $order = 1 ?>
        @foreach($user->educations as $education)
            <tr>
                <td width="40px">
                    <span class="badge badge-primary">{{ $order++ }}</span>
                </td>
                <td>
                    <p class="mb-0 text-primary">{{ $education->degree }}</p>
                    <p class="text-muted mb-2">{{ $education->institution }} - {{ $education->major }}</p>
                </td>
                <td class="text-right">
                    <p class="mb-0 text-primary"><strong>{{ $education->enter }}
                            - {{ if_empty($education->graduate, __('Now')) }}</strong></p>
                    <p class="text-muted mb-2">{{ $education->location }}</p>
                </td>
            </tr>
        @endforeach
    </table>

    <p class="lead mb-1 text-wide text-primary">EXPERIENCES</p>
    <table class="w-100 mb-4">
        <?php $order = 1 ?>
        @foreach($user->experiences as $experience)
            <tr>
                <td width="40px">
                    <span class="badge badge-primary">{{ $order++ }}</span>
                </td>
                <td width="70%">
                    <p class="mb-0 text-primary">{{ $experience->experience }}</p>
                    <p class="text-muted mb-1">{{ $experience->occupation }}</p>
                </td>
                <td class="text-right">
                    <p class="mb-0 text-primary">{{ $experience->start }}
                        - {{ if_empty($experience->end, __('Now')) }}</p>
                    <p class="text-muted mb-1">{{ $experience->location }}</p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <p class="text-justify">{{ $experience->description }}</p>
                </td>
            </tr>
        @endforeach
    </table>

    <p class="lead mb-1 text-wide text-primary">ACHIEVEMENT</p>
    <table class="w-100 mb-4">
        <?php $order = 1 ?>
        @foreach($user->awards as $award)
            <tr>
                <td width="40px">
                    <span class="badge badge-primary">{{ $order++ }}</span>
                </td>
                <td>
                    <p class="mb-0 text-primary">{{ $award->title }} : {{ $award->category }}</p>
                    <p class="text-muted mb-2">{{ $award->description }}</p>
                </td>
                <td class="text-right">
                    <p class="mb-0 text-primary">{{ $award->awarded_in }}</p>
                    <p class="text-muted mb-2">{{ $award->location }}</p>
                </td>
            </tr>
        @endforeach
    </table>

    <hr class="separator mb-4">

    <p class="lead mb-1 text-wide text-primary">EXPERTISE</p>
    <table class="w-100 mb-0">
        <?php $order = 1 ?>
        @foreach($user->skills as $skill)
            @if($order % 2 == 1)
                <tr>
                    @endif
                    <td class="{{ ($order % 2 == 1) ? 'pr-3' : 'pl-3' }} pb-2" style="vertical-align: top">
                        <p class="mb-0 text-primary">{{ $skill->expertise }}</p>
                        <p class="text-muted" style="height: 55px">{{ $skill->description }}</p>
                        <div>
                            <div style="background: #f2f2f2;">
                                <div class="bg-primary" style="width: {{ $skill->proficiency_level }}%; height: 4px"></div>
                            </div>
                            <p class="small text-primary">{{ $skill->proficiency_level }} / 100</p>
                        </div>
                    </td>
                    @if($order % 2 == 0)
                </tr>
            @endif
            <?php $order++ ?>
        @endforeach
    </table>

    <hr class="separator mb-4">

    <p class="lead mb-1 text-wide text-primary">PORTFOLIO</p>
    <table class="w-100">
        @foreach($user->portfolios as $portfolio)
            <tr class="pb-3">
                <td class="pt-2" style="width: 200px; vertical-align: top; border-bottom: 1px solid #F2F2F2">
                    <img src="{{ storage_path('app/public/' . get_small_version($portfolio->cover)) }}" class="mt-3"
                         style="width: 100%; border-radius: 5px">
                </td>
                <td class="pl-4 pt-2 clearfix" style="border-bottom: 1px solid #F2F2F2">
                    <p class="mb-0 text-primary" style="font-size: 16px">{{ $portfolio->title }}</p>
                    <p class="mb-2">{{ $portfolio->field }} - {{ $portfolio->company }}</p>
                    <p class="text-muted mb-2 small">{{ $portfolio->description }}</p>
                    <a href="{{ $portfolio->url }}" class="link-natural">{{ $portfolio->url }}</a>
                    <p class="float-right">{{ format_date($portfolio->date, 'F, Y') }}</p>
                </td>
            </tr>
        @endforeach
    </table>

@endsection