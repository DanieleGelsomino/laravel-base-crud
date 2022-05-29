@extends('layouts.app')

@section('title')
    DC Comics
@endsection

@section('content')
    <div class="container-fluid bg-comics">
        <div>
            <h1 class="text-center pt-3 text-primary">I Nostri Fumetti</h1>
            <div class="d-flex flex-column align-items-center">
                @forelse ($comics as $comic)
                    <div class="">
                        <h3 class="pt-3">{{ $comic->title }}</h3>
                    </div>
                    <div class="mt-2">
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
@endsection
