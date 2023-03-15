@extends('layouts.app')

@section('page_name') {{ $comic->title }} | @endsection

@section('page_content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <div class="card-box">
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h6>{{ $comic->type }}</h6>
                <h3>{{ $comic->series }}</h3>
                <p>{{ $comic->description }}</p>
                <h4>{{ $comic->price }}</h4>
                <h5>{{ $comic->sale_date }}</h5>
                <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti</a>
            </div>
        </div>
    </div>
@endsection
