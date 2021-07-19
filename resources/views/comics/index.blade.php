@extends('layouts.main')

@section('title', 'DC Comics | Index')

@section('main-content')
    <section id="index">
        <div class="container">
            <h1>Index DC Comics</h1>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titolo</th>
                        <th colspan="3">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            {{ $comics->links() }}
        </div>
    </section>
@endsection