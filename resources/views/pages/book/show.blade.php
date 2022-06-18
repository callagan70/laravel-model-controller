@extends('layout.layout')

@section('title', 'titolo del libbro')

@section('content')
    {{-- codice per visualizzare la singola card --}}
    <div class="col card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">{{ $book->description }}</p>
        </div>
    </div>
@endsection
