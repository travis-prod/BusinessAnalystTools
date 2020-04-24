<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Outputs</title>
</head>
<body>
<h1>Requirements Gathering Journey Project Outputs</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectNewOutput', ['project_id' => $project->id])}}">Add Output</a>
</div>
@foreach($outputTypeEnums as $output)
    <a href="{{route('requirementsGatheringJourneyProjectOutput', ['project_id' => $project->id, 'output_type_enum_id' => $output->id])}}">
        <div>
            <h2>{{$output->name}}</h2>
            <p>{{$output->description}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
