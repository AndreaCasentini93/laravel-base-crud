@extends('layouts.main')

@section('title', 'DC Comics | Lista Fumetti')

@section('main-content')
    <section id="index">
        <div class="container">
            <h1 class="text-center">Lista Fumetti DC Comics</h1>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titolo</th>
                        <th colspan="3">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">SHOW</a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-warning">EDIT</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $comics->links() }}
        </div>
    </section>
@endsection