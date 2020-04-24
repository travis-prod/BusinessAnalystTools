<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Projects</title>
</head>
<body>
<h1>Requirements Gathering Journey</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyNewProject')}}">Add Project</a>
</div>
@foreach($projects as $project)
    <a href="{{route('requirementsGatheringJourneyProject', ['project_id' => $project->id])}}">
        <div>
            <h2>{{$project->name}}</h2>
            <p>{{$project->description}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
