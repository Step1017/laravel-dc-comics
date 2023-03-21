@extends('layouts.app')

@section('page_name') Nuovo Comic | @endsection

@section('page_content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Crea Comic</h2>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 ">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" id="title" class="form-control @error ('title') is-invalid @enderror" name="title" maxlength="255" placeholder="Inserisci il titolo...">
                        @error ('title')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" id="thumb" class="form-control @error ('thumb') is-invalid @enderror" name="thumb" maxlength="255" placeholder="Inserisci il link...">
                        @error ('thumb')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea id="description" class="form-control @error ('description') is-invalid @enderror" name="description" cols="30" rows="10" placeholder="Inserisci una descrizione..."></textarea>
                        @error ('description')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label ">Prezzo</label>
                        <input type=number class="form-control @error ('price') is-invalid @enderror" step=0.01 id="price" name="price" min="0.09" placeholder="0,00">
                        @error ('price')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" id="series" class="form-control @error ('series') is-invalid @enderror" name="series" maxlength="255" placeholder="Inserisci il nome della serie...">
                        @error ('series')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" id="sale_date" class="form-control @error ('sale_date') is-invalid @enderror" name="sale_date">
                        @error ('sale_date')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select id="type" class="form-control @error ('type') is-invalid @enderror" name="type">
                            <option selected disabled>Seleziona la tipologia</option>
                            <option value="comic book">Comic book</option>
                            <option value="graphic novel">Graphic novel</option>
                        </select>
                        @error ('type')
                            <span class="d-block mt-2 text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Crea</button>
                </form>
            </div>
        </div>  
        <a href="{{ route('comics.index') }}">Torna alla home</a>
    </div>
@endsection
