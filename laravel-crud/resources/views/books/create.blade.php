{{-- <form action="{{route('books.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titolo del libro">
    <textarea name="plot" id="plot" cols="30" rows="10" placeholder="Trama del libro"></textarea>
    <input type="submit" value="Crea">
</form> --}}
<form action="{{route('books.store')}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="title">Titolo del Fumetto</label>
      <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="plot">Trama del Libro</label>
      <textarea class="form-control" id="plot" name="plot" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
  </form>
