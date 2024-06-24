<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects</title>

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
            <h1>Projects</h1>
            @foreach($projects as $project)
                <a href="{{ url('/projects', $project->id) }}"><div> {{$project->name}} </div></a>
            @endforeach
        </div>
    </body>
</html>
