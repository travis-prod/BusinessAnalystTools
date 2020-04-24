<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase Entry Inputs</title>
</head>
<body>
<h1>Requirements Gathering Journey Project Phase Entry Inputs</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntryNewInput',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id,
        ])}}">Add Input</a>
</div>
@foreach($entryInputs as $input)
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntryInput',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id,
            'entry_input_id' => $input->id,
        ])}}">
        <div>
            <h2>{{$input->inputTypeEnum->name}}</h2>
            <p>Count: {{$input->count}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
