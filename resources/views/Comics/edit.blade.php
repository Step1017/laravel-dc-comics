@extends('layouts.app')

@section('page_name') Modifica Comic | @endsection

@section('page_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Modifica il fumetto: {{ $comic->title }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 ">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" id="title" class="form-control" name="title" required maxlength="255" placeholder="Inserisci il titolo..." value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" id="thumb" class="form-control" name="thumb" maxlength="255" placeholder="Inserisci il link...">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea id="description" class="form-control" name="description" cols="30" rows="10" placeholder="Inserisci la descrizione...">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type=number class="form-control" step=0.01 id="price" name="price" required placeholder="Inserisci il prezzo -> es.0,00" value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" id="series" class="form-control" name="series" required maxlength="255" placeholder="Inserisci il nome della serie..." value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" id="sale_date" class="form-control" name="sale_date" required value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select id="type" class="form-control" name="type" required>
                            {{-- Cerca soluzione su come mostrare il vecchio valore nella select--}}
                            <option selected disabled>Seleziona la tipologia</option>
                            <option value="comic book">Comic book</option>
                            <option value="graphic novel">Graphic novel</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>  
        <a href="{{ route('comics.show', $comic->id) }}">Annulla modifica</a>
    </div>
@endsection
