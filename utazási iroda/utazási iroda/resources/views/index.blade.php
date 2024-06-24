<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Világraszóló Utazási Iroda</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class= "bg-white px-6 py-12 ">
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Utazások</h1>
        @foreach ($countries as $country)
            <a href="{{ url('/countries', $country->id) }}" class="inline-flex mx-2 px-4 py-6 border border-gray-800 rounded-lg bg-gray-200 my-5">
                <h2 class="text-xl leading-8 text-gray-700 font-bold pe-4"> {{$country->name}} </h2>
                <h2 class="text-xl leading-8 text-gray-700">{{$country->vehicle}}</h2>
            </a>
        @endforeach
        {{ $countries->links() }}
    </div>
</body>
</html>