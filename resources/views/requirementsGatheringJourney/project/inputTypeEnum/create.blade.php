<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project New Input</title>
</head>
<body>

<h1>Create a New Input</h1>
<form method="post" action="{{route('requirementsGatheringJourneyProjectCreateInput', ['project_id' => $project->id])}}">
    @csrf
    <label for="name">Name
        <input aria-label="name" type="text" name="name">
    </label>
    <input aria-label="submit" type="submit" value="Submit">
</form>
</body>
</html>
