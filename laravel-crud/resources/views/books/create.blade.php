@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titolo del libro">
        <textarea name="plot" id="plot" cols="30" rows="10" placeholder="Trama del libro"></textarea>
        <input type="submit" value="Crea">
    </form>
</div>

@endsection

