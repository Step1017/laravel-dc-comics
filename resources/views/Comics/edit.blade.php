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
                        <input type="text" id="title" class="form-control @error ('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $comic->title }}" maxlength="255" placeholder="Inserisci il titolo...">
                        @error('title')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" id="thumb" class="form-control" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}" maxlength="255" placeholder="Inserisci il link...">
                        @error('thumb')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea id="description" class="form-control" name="description" cols="30" rows="10" placeholder="Inserisci la descrizione...">{{ old('description') ?? $comic->description }}</textarea>
                        @error('description')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type=number class="form-control" step=0.01 id="price" name="price" value="{{ old('price') ?? $comic->price }}" min="0.09" placeholder="Inserisci il prezzo -> es.0,00">
                        @error('price')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" id="series" class="form-control" name="series" value="{{ old('series') ?? $comic->series }}" maxlength="255" placeholder="Inserisci il nome della serie...">
                        @error('series')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" id="sale_date" class="form-control" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
                        @error('sale_date')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select id="type" class="form-control" name="type" >
                            <option {{ !isset($comic->type) || $comic->type == '' ? 'selected' : '' }} disabled>Seleziona la tipologia</option>
                            <option {{ (old('type') ?? $comic->type) == 'comic book' ? 'selected' : ''}} value="comic book">Comic book</option>
                            <option {{ (old('type') ?? $comic->type) == 'graphic novel' ? 'selected' : ''}} value="graphic novel">Graphic novel</option>
                        </select>
                        @error('type')
                            <span class="d-block mt-2 text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica</button>
                </form>
            </div>
        </div>  
        <a href="{{ route('comics.show', $comic->id) }}">Annulla modifica</a>
    </div>
@endsection
