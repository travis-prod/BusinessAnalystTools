<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project New Phase</title>
</head>
<body>

<h1>Create a New Phase</h1>
<form method="post"
      action="{{route('requirementsGatheringJourneyProjectCreatePhase', ['project_id' => $project->id])}}">
    @csrf
    <label for="name">Name
        <input aria-label="name" type="text" name="name">
    </label>
    <label for="description">Description
        <input aria-label="description" type="text" name="description">
    </label>
    <label for="start_date">Start Date
        <input aria-label="start date" type="date" name="start_date" value="{{date('Y-m-d')}}">
    </label>
    <label for="estimated_completion_date">Estimated Completion Date
        <input aria-label="estimated completion date" type="date" name="estimated_completion_date">
    </label>
    <label for="actual_completion_date">Actual Completion Date
        <input aria-label="actual completion date" type="date" name="actual_completion_date">
    </label>
    <label for="overall_rating">Overall Rating (1-10)
        <input aria-label="overall rating" type="number" min="1" max="10" name="overall_rating" value="5">
    </label>
    <input aria-label="submit" type="submit" value="Submit">
</form>
</body>
</html>
