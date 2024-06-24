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
        <div class="flex">
            <div class="flex px-4">{{ $project->name }}</div>
            <div class="flex px-4">{{ $project->desc }}</div>
            <div class="flex px-4">{{ $project->human_name }}</div>
            <div class="flex px-4">{{ $project->date }}</div>
        </div>

        <div class="my-6 px-4">
            @php
                $tasks = $project->tasks->sortBy('name');
            @endphp
            <div>{{$tasks}}</div>
            @foreach($tasks as $task)
                <div>{{ $task->name }}</div>
                <div>{{ $task->desc }}</div>
            @endforeach
        </div>
        <a href="/">ANYÁD IMRE</a>
    </body>
</html>
