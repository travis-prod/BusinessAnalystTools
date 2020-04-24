<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase Entries</title>
</head>
<body>
<h1>Requirements Gathering Journey Project Phase Entries</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectPhaseNewEntry',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
        ])}}">Add Entry</a>
</div>
@foreach($entries as $entry)
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntry',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id
        ])}}">
        <div>
            <h2>{{$entry->name}}</h2>
            <p>{{$entry->description}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
