@extends('layouts.app')

@section('page_name') Home | @endsection

@section('page_content')
    <div class="container">
        <h2 class="text-center">Comics-List</h2>
        <div class="card-box">
            @foreach ($comics as $comic)
                <div class="card mb-4">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h4>{{ $comic->title }}</h4>
                    <h5>€ {{ $comic->price }}</h5>
                    <h6>{{ $comic->type }}</h6>
                    <a href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href="{{ route('comics.create') }}">Inserisci nuovo Comic</a>
    </div>
@endsection
