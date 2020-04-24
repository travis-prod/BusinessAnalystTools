<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase Entry New Output</title>
</head>
<body>

<h1>Create a New Output</h1>
<form method="post" action="{{route('requirementsGatheringJourneyProjectPhaseEntryCreateOutput',
    [
        'project_id' => $project->id,
        'phase_id' => $phase->id,
        'entry_id' => $entry->id,
    ])}}">
    @csrf
    <label for="count">Count
        <input aria-label="count" type="number" min="1" name="count" value="1">
    </label>
    <label for="average effectiveness">Average Effectiveness (1-10)
        <input aria-label="average effectiveness" type="number" min="1" max="10" name="effectiveness" value="5">
    </label>
    <label for="type">Output Type
        <select aria-label="type" name="type">
            <option value="-1" disabled selected>Select one</option>
            @foreach($outputTypes as $outputType)
                <option value="{{$outputType->id}}">{{$outputType->name}}</option>
            @endforeach
        </select>
    </label>
    <input aria-label="submit" type="submit" value="Submit">
</form>
</body>
</html>
