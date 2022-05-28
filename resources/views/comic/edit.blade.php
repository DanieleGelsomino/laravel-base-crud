<form action="{{ route('comic.update', $comics->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title:</label>
        <input type="text" required name="title" value="{{ $comics->title }}">
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
        <input type="text" name="thumb" value="{{ $comics->thumb }}">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $comics->price }}">
    </div>
    <div>
        <label for="sale_date">On Sale:</label>
        <input type="date" name="sale_date" value="{{ $comics->sale_date }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description">{{ $comics->description }}</textarea>
    </div>

    <input type="submit" value="invia">
</form>
<div class="mb-5">
    <button class="dg-btn mb-3">
        <a href="{{ route('comic.index') }}">INDIETRO</a>
    </button>
</div>
