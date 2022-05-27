<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>DC Comics</title>
</head>

<body>

</body>
<div class="container-fluid">
    <div class="">
        <h1>I nostri fumetti</h1>
        <div class="">
            @forelse ($comics as $comic)
                <div class="">
                    <h3 class="pt-3">{{ $comic->title }}</h3>
                </div>
                <div class="mt-3">
                    <button class="dg-btn">
                        <a href="{{ route('comic.show', $comic->id) }}">DETTAGLI</a>
                    </button>
                    <button class="dg-btn mt-3 mb-3">
                        <a href="{{ route('comic.edit', $comic->id) }}">MODIFICA</a>
                    </button>
                </div>

            @empty
                Non ci sono fumetti
            @endforelse

            <button class="dg-btn mt-3 mb-3">
                <a href="{{ route('comic.create') }}">AGGIUNGI</a>
            </button>
        </div>
    </div>
</div>

</html>
