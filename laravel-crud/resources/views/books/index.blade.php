<div>
    <ul>
        @foreach ($books as $book)
            <li>{{$book->title}}</li>
            <li>{{$book->plot}}</li>
        @endforeach
    </ul>
</div>
