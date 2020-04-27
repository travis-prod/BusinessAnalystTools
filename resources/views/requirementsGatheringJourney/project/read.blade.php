<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Requirements Gathering Journey Project</title>
</head>
<body>

<h1>{{$project->name}}</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectPhases', ['project_id' => $project->id])}}">Manage Phases</a>
    <a href="{{route('requirementsGatheringJourneyProjectInputs', ['project_id' => $project->id])}}">Manage Input
        Types</a>
    <a href="{{route('requirementsGatheringJourneyProjectOutputs', ['project_id' => $project->id])}}">Manage Output
        Types</a>
</div>

<button id="renderBtn">
    Render
</button>
<div class="container">
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="/js/requirementsGatheringJourney/project.js"></script>
</body>
</html>
