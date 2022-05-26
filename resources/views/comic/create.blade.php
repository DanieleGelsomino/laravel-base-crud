<form action="{{ route('comic.store') }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $comics->title }}"">
    </div>
    <div>
        <label for=" series">Series:</label>
        <input type="text" name="series" value="{{ $comics->series }}">
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $comics->type }}">
    </div>
    <div>
        <label for="thumb">Poster:</label>
        <input type="text" name="thumb">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $comics->price }}">
    </div>
    <div>
        <label for="sale_date">On Sale:</label>
        <input type="text" name="sale_date" value="{{ $comics->sale_date }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="descrtiption" id="" cols="30" rows="10">{{ $comics->description }}</textarea>
    </div>

    <button type="submit">INVIA</button>
</form>
<a href="{{ route('comic.index') }}">INDIETRO</a>
