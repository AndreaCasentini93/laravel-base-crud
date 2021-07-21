@extends('layouts.main')

@section('title', 'DC Comics | Aggiungi Fumetto')

@section('main-content')
    <section id="create">
        <div class="container">
            <h1 class="text-center">Aggiungi Fumetto DC Comics</h1>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Inserisci Titolo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="7" placeholder="Inserisci Descrizione"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input name="thumb" type="text" class="form-control" id="thumb" aria-describedby="emailHelp" placeholder="Inserisci URL Immagine">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="number" step="0.01" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Inserisci Prezzo">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control" id="series" aria-describedby="emailHelp" placeholder="Inserisci Serie">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Uscita</label>
                    <input name="sale_date" type="date" class="form-control" id="sale_date" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input name="type" type="text" class="form-control" id="type" aria-describedby="emailHelp" placeholder="Inserisci Tipologia">
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary">Lista Fumetti</a>
            </form>
        </div>
    </section>
@endsection