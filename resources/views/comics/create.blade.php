@extends('layouts.main')

@section('title', 'DC Comics | Aggiungi Fumetto')

@section('main-content')
    <section id="create">
        <div class="container">
            <h1 class="text-center">Aggiungi Fumetto DC Comics</h1>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" placeholder="Inserisci Titolo" value="{{ old('title') }}">
                    @error('title')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="7" placeholder="Inserisci Descrizione">{{ old('description') }}</textarea>
                    @error('description')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="emailHelp" placeholder="Inserisci URL Immagine" value="{{ old('thumb') }}">
                    @error('thumb')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="emailHelp" placeholder="Inserisci Prezzo" value="{{ old('price') }}">
                    @error('price')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="emailHelp" placeholder="Inserisci Serie" value="{{ old('series') }}">
                    @error('series')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Uscita</label>
                    <input name="sale_date" type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="emailHelp" value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" aria-describedby="emailHelp" placeholder="Inserisci Tipologia" value="{{ old('type') }}">
                    @error('type')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Lista Fumetti</a>
            </form>
        </div>
    </section>
@endsection