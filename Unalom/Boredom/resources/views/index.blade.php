<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div>
            <h1>Mit csinálj ha unatkozol?</h1>
            <a href="{{ url('/categories', $activity->category->id) }}"><h2> {{$activity->category->name}} </h2></a>
            <h3> {{$activity->name}} </h2>
        </div>
    </body>
</html>
