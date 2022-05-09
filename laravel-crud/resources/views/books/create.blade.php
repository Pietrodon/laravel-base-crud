@extends('layouts.app')

@section('content')
<form action="{{route('books.store')}}" method="POST">
    @csrf
    <div class="container">
        <div class="form-group ">
            <label for="title">Titolo del fumetto</label>
            <input type="text" name="title" placeholder="Titolo del Fumetto">
          </div>
          <div class="form-group">
            <label for="text">Trama del fumetto</label>
            <textarea name="plot" id="plot" cols="30" rows="10" placeholder="Trama del Fumetto"></textarea>
          </div>
          <div class="form-group">
            <label for="writer">Autore del fumetto</label>
            <input type="text" name="writer" placeholder="Autore del Fumetto">
          </div>

          <button type="submit" class="btn btn-primary">Crea</button>
        </div>
    </div>
</form>
@endsection

