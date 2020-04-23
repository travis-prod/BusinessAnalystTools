<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project</title>
</head>
<body>

<h1>{{$project->getName()}}</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectNewEntry', $project->getId())}}">Add Entry</a>
    <a href="{{route('requirementsGatheringJourneyProjectInputs', $project->getId())}}">Manage Input Types</a>
    <a href="{{route('requirementsGatheringJourneyProjectOutputs', $project->getId())}}">Manage Output Types</a>
</div>
<div id="chart">
    Chart
</div>
</body>
</html>
