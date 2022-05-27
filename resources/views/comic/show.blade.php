<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Details</title>
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex flex-column align-items-center">
            <h1 class="mb-5">Dettagli</h1>
            <div class="details d-flex flex-column align-items-center">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
                <h4>Series: {{ $comics->series }}</h4>
                <p>Type: {{ $comics->type }}</p>
                <p>Price: &euro; {{ $comics->price }}</p>
                <p>On sale: {{ $comics->sale_date }}</p>
                <p class="dg-description"><span class="text-center">Description:</span> <br>
                    {{ $comics->description }}</p>
            </div>
            <div class="mb-5">
                <button class="dg-btn mb-3">
                    <a href="{{ route('comic.index') }}">INDIETRO</a>
                </button>
                <form action="{{ route('comic.destroy', $comics->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="dg-btn" type="submit" value="Elimina">
                </form>
            </div>
        </div>
</body>

</html>
