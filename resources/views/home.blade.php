@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="mt-3 nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="true">Team</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="players-tab" data-bs-toggle="tab" data-bs-target="#players" type="button" role="tab" aria-controls="players" aria-selected="false">
                        Players
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-5" id="team" role="tabpanel" aria-labelledby="team-tab">
                    <div class="d-flex">
                        <div class="col-md-3">
                            <img class="w-100" src="{{$team->strTeamBadge}}" alt="">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="{{$team->strTeamJersey}}" alt="">
                        </div>
                    </div>
                    <p class="mt-5 mb-0"><span class="font-bold">Full name:</span> {{$team->strTeam}}</p>
                    <p class="m-0"><span class="font-bold">Ground:</span> {{$team->strStadium}}</p>
                    <p class="m-0"><span class="font-bold">League:</span> {{$team->strLeague}}</p>
                    <p class="m-0"><span class="font-bold">Description:</span> {{$team->strDescriptionEN}}</p>
                    <p class="m-0"><span class="font-bold">Youtube:</span> <a href="{{$team->strYoutube}}">Link</a></p>
                </div>
                <div class="tab-pane fade pt-5" id="players" role="tabpanel" aria-labelledby="players-tab">
                    @if(collect($players)->count() > 0)
                        <div class="d-flex flex-wrap justify-content-between">
                            @foreach($players as $player)
                                <div class="card m-1" style="width: 24%">
                                    <img src="{{$player->strThumb}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$player->strPlayer}}</h5>
                                        <p class="mb-0"><span class="font-bold">Height:</span> {{$player->strHeight}}</p>
                                        <p class="m-0"><span class="font-bold">Weight:</span> {{$player->strWeight}}</p>
                                        <p class="card-text text-line-clamp">{{$player->strDescriptionEN}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
