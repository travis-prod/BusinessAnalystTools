<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase</title>
</head>
<body>

<h1>{{$phase->name}}</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntries',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
        ])}}">Manage Entries</a>
</div>
</body>
</html>
