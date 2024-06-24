<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div>
            <h1> {{$pass->name}} </h1>
        </div>
        <div>
            <ul>
                @foreach ($pass->activities as $activity)
                    <li> {{$activity->name}} </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
