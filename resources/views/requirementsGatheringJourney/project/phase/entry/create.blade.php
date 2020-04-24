<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase New Entry</title>
</head>
<body>

<h1>Create a New Entry</h1>
<form method="post" action="{{route('requirementsGatheringJourneyProjectPhaseCreateEntry',
    [
        'project_id' => $project->id,
        'phase_id' => $phase->id,
    ])}}">
    @csrf
    <label for="date">Date
        <input aria-label="date" type="date" name="date" value="{{date('Y-m-d')}}">
    </label>
    <label for="personal feeling">Personal Feeling (1-10)
        <input aria-label="personal feeling" type="number" min="1" max="10" name="personal_feeling" value="5">
    </label>
    <label for="client feeling">Client Feeling (1-10)
        <input aria-label="client feeling" type="number" min="1" max="10" name="client_feeling" value="5">
    </label>
    <label for="number of meetings">Number of Meetings
        <input aria-label="number of meetings" type="number" min="0" name="num_of_meetings" value="0">
    </label>
    <label for="number of communications">Number of Communications
        <input aria-label="number of communications" type="number" min="0" name="num_of_communications" value="0">
    </label>
    <label for="project understanding">Project Understanding (1-10)
        <input aria-label="project understanding" type="number" min="1" max="10" name="understanding" value="5">
    </label>
    <input aria-label="submit" type="submit" value="Submit">
</form>
</body>
</html>
