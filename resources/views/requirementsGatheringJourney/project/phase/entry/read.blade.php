<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase Entry</title>
</head>
<body>

<h1>{{$entry->date}}</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntryInputs',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id,
        ])}}">Manage Inputs</a>
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntryOutputs',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id,
        ])}}">Manage Outputs</a>
</div>
</body>
</html>
