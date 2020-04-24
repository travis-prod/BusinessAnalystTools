<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Requirements Gathering Journey Project Phase Entry</title>
</head>
<body>

<h1>{{$input->inputTypeEnum->name}}</h1>
<p>Count: {{$input->count}}</p>
<p>Effectiveness: {{$input->effectiveness}}</p>
</body>
</html>
