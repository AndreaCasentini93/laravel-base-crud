@extends('layouts.main')

@section('title', 'Errore 404 | Pagina Non Trovata')

@section('main-content')
    <section id="error_404">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h1>Errore 404</h1>
            <h3>Oooops... La pagina non è stata trovata.</h3>
            <a href="{{ route('home') }}" class="btn btn-primary">Torna alla Home</a>
        </div>
    </section>
@endsection