@inject('projects', '\App\Services\ProjectService')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Home</title>
</head>
<body>
<h1>Requirements Gathering Journey</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyNewProject')}}">Add Project</a>
</div>
@foreach($projects->all() as $project)
    <a href="{{route('requirementsGatheringJourney/project/' . $project->getId())}}">
        <div>
            <h2>{{$project->getName()}}</h2>
            <p>{{$project->getDescription()}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
