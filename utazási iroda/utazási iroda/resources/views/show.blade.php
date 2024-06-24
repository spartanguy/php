<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$country->name}} </title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class= "bg-white px-6 py-12 ">
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"> {{$country->name}} </h1>
        <h1 class="mt-2 text-xl tracking-tight text-gray-900 sm:text-4xl"> Közlekedési eszköz {{$country->vehicle}} </h1>
        @if ($country->travels->isEmpty())
            <p>Nincs elérhető indulási időpont.</p>
        @else
            @foreach ($country->travels as $trip)
                <div class="inline-flex mx-2 px-4 py-6 border border-gray-800 rounded-lg bg-gray-200 my-5">
                    <h2 class=" leading-8 text-gray-700 pe-4"> {{$trip->departure_date}} </h2>
                    <h2 class=" leading-8 text-gray-700">{{$trip->price}}</h2>
                </div>
            @endforeach
        @endif
    </div>
    <a class="inline-flex mx-2 px-4 py-6 border border-gray-800 rounded-lg bg-gray-200 my-5" href="{{ url('/') }}">Vissza a főoldalra</a>
</body>
</html>