<form action="{{ route('comic.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title:</label>
        <input type="text" required name="title">
    </div>
    <div>
        <label for=" series">Series:</label>
        <input type="text" name="series">
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" name="type">
    </div>
    <div>
        <label for="thumb">Poster:</label>
        <input type="text" name="thumb">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price">
    </div>
    <div>
        <label for="sale_date">On Sale:</label>
        <input type="date" name="sale_date">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="descrtiption" id="" cols="30" rows="5"></textarea>
    </div>

    <input type="submit" value="invia"></input>
</form>
<div class="mb-5">
    <button class="dg-btn mb-3">
        <a href="{{ route('comic.index') }}">INDIETRO</a>
    </button>
</div>
