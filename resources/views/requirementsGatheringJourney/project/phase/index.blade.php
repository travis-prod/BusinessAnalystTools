<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phases</title>
</head>
<body>
<h1>Requirements Gathering Journey Project Phases</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectNewPhase', ['project_id' => $project->id])}}">Add Phase</a>
</div>
@foreach($phases as $phase)
    <a href="{{route('requirementsGatheringJourneyProjectPhase', ['project_id' => $project->id, 'phase_id' => $phase->id])}}">
        <div>
            <h2>{{$phase->name}}</h2>
            <p>{{$phase->description}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
