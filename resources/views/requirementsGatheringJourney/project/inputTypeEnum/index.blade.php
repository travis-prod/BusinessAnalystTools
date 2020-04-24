<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Inputs</title>
</head>
<body>
<h1>Requirements Gathering Journey Project Inputs</h1>
<div id="action-container">
    <a href="{{route('requirementsGatheringJourneyProjectNewInput', ['project_id' => $project->id])}}">Add Input</a>
</div>
@foreach($inputTypeEnums as $input)
    <a href="{{route('requirementsGatheringJourneyProjectInput', ['project_id' => $project->id, 'input_type_enum_id' => $input->id])}}">
        <div>
            <h2>{{$input->name}}</h2>
            <p>{{$input->description}}</p>
        </div>
    </a>
@endforeach
</body>
</html>
