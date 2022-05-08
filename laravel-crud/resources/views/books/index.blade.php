@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($books as $book)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$book->title}}</h5>
          <p class="card-text">{{$book->plot}}</p>
          <a href="#" class="card-link">Modifica</a>
          <a href="#" class="card-link">Elimina</a>
        </div>
    </div>
@endforeach
</div>


@endsection

