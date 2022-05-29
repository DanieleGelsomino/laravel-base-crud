@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column align-items-center">
            <h1 class="mt-3 mb-5 text-primary">Dettagli</h1>
            <div class="d-flex flex-column align-items-center">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
                <h4 class="mt-2">Series: {{ $comics->series }}</h4>
                <p>Type: {{ $comics->type }}</p>
                <p>Price: &euro; {{ $comics->price }}</p>
                <p>On sale: {{ $comics->sale_date }}</p>
                <span class="text-center">Description:</span>
                <p class="dg-description">{{ $comics->description }}</p>
            </div>
            <div class="mb-5 d-flex justyfy-content-evenly">
                <button class="dg-btn mb-3">
                    <a href="{{ route('comic.index') }}">INDIETRO</a>
                </button>
                <form action="{{ route('comic.destroy', $comics->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="dg-btn delete-text" type="submit" value="Elimina">
                </form>
            </div>
        </div>
    @endsection
