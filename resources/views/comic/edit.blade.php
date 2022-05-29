@extends('layouts.app')

@section('title')
    Edit
@endsection

@section('content')
    <h1 class="text-center mt-3 text-primary">Modifica Fumetto</h1>
    <form class="mt-5" action="{{ route('comic.update', $comics->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center mb-2">
            <div class="col-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" required name="title" value="{{ $comics->title }}">
            </div>
            <div class="col-3">
                <label for=" series" class="form-label">Series:</label>
                <input type="text" class="form-control" name="series" value="{{ $comics->series }}">
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-3">
                <label for="type" class="form-label">Type:</label>
                <input type="text" class="form-control" name="type" value="{{ $comics->type }}">
            </div>
            <div class="col-3">
                <label for="thumb" class="form-label">Poster:</label>
                <input type="text" class="form-control" name="thumb" value="{{ $comics->thumb }}">
            </div>
        </div>

        <div class="row justify-content-center mb-2">
            <div class="col-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" name="price" value="{{ $comics->price }}">
            </div>
            <div class="col-3">
                <label for="sale_date" class="form-label">On Sale:</label>
                <input type="date" class="form-control" name="sale_date" value="{{ $comics->sale_date }}">
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-6">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description">{{ $comics->description }}</textarea>
            </div>
        </div>
        <div class="row justify-content-center">
            <input class="mb-3 mt-5 dg-btn text-primary text-uppercase col-1" type="submit" value="invia">
        </div>

    </form>
    <div class="row justify-content-center">
        <button class="col-1 dg-btn mb-3">
            <a href="{{ route('comic.index') }}">INDIETRO</a>
        </button>
    </div>
@endsection
