<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>

<body>
    <div class="details">
        <h4>Series: {{ $comics->series }}</h4>
        <p>Type: {{ $comics->type }}</p>
        <p>Price: &euro; {{ $comics->price }}</p>
        <p>On sale: {{ $comics->sale_date }}</p>
        <p>Description: <br> {{ $comics->description }}</p>
    </div>
    <div class="mb-3">
        <button class="dg-btn">
            <a href="{{ route('comic.index') }}">INDIETRO</a>
        </button>
    </div>

</body>

</html>
