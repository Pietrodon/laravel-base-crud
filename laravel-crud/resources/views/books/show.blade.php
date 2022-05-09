@extends('layouts.app')

@section('content')
<div class="container">
    <p>Stai visualizzando il fumetto:</p>
    <h1 class="d-flex justify-content-center">{{$book->title}}</h1>
</div>
<div class="container d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <p class="card-text">{{$book->plot}}</p>
          <a href="{{route('books.index')}}" class="btn btn-primary">Torna indietro</a>
        </div>
      </div>
</div>
@endsection
