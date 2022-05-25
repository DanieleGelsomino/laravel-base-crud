<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DC Comics</title>
</head>

<body>

</body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            @forelse ($comics as $comic)
                <div>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h3>{{ $comic->title }}</h3>
                </div>
                <div class="dg-btn">
                    <button>
                        <a href="{{ route('comic.show', $comic->id) }}">Scopri di più</a>
                    </button>
                </div>
            @empty
                Non ci sono fumetti
            @endforelse
        </div>
    </div>
</div>

</html>
