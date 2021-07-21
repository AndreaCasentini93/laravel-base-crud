@extends('layouts.main')

@section('title', 'DC Comics | Show')

@section('main-content')
    <section id="show">
        <div class="container">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <h1 class="text-center">{{ $comic->title }}</h1>
            <div class="comic d-flex justify-content-center">
                <div>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h2><strong>Serie</strong>: {{ $comic->series }}</h2>
                    <h4><strong>Uscita</strong>: {{ $comic->sale_date }}</h4>
                    <h6><strong>Tipologia</strong>: {{ $comic->type }}</h6>
                    <h3><strong>Prezzo</strong>: &euro; {{ $comic->price }}</h3>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla Lista Fumetti</a>
            </div>
        </div>
    </section>
@endsection