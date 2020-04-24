<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase Entry Outputs</title>
</head>
<body>
<h1>Requirements Gathering Journey Project Phase Entry Outputs</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntryNewOutput',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id,
        ])}}">Add Output</a>
</div>
@foreach($entryOutputs as $output)
    <a href="{{route('requirementsGatheringJourneyProjectPhaseEntryOutput',
        [
            'project_id' => $project->id,
            'phase_id' => $phase->id,
            'entry_id' => $entry->id,
            'entry_output_id' => $output->id,
        ])}}">
        <div>
            <h2>{{$output->outputTypeEnum->name}}</h2>
            <p>Count: {{$output->count}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
