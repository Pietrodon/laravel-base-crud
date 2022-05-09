@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-items-center">
    <h1>Il Mio Portale Di Fumetti</h1>
    <h3>Qui potrai trovare i fumetti più famosi</h3>
</div>
<div class="container d-flex justify-content-center">
    <form action="{{route('books.create')}}">
        <button type="submit" class="btn btn-outline-danger">Aggiungi Fumetto</button>
    </form>
</div>
<div class="container d-flex flex-wrap">
    @foreach ($books as $book)
        <div class="card m-3" style="width: 18rem;">
            <img src="https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$book->title}}</h5>
            <form action="{{route('books.show', $book->id)}}" method="get">
                @csrf
                <button type="submit" class="btn btn-outline-primary d-flex m-1">Vedi info</button>
            </form>
            <form action="{{route('books.destroy', $book)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger d-flex m-1">Elimina</button>
            </form>
            </div>
        </div>
    @endforeach
</div>
@endsection

