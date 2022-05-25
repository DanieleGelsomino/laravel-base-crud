<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dettagli</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3 class="pt10">{{ $comic->title }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>€{{ $comic->price }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->sale_date }}</p>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
        <div class="dg-btn">
            <button>
                <a href="{{ route('comics.index', $comic->id) }}">Torna indietro</a>
            </button>
        </div>
    </div>
</body>

</html>
