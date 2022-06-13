<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <link href="{{ url("css/app.css") }}" rel="stylesheet">
    @livewireStyles
</head>
<body>


<script src="{{ url("js/app.js") }}"></script>
@livewireScripts

</body>
</html>