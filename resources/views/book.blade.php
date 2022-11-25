
<div class="row">
    @foreach($books as $book)
    <div class="col-3 p-1">
        <div class="border rounded bg-light">
            {{-- image --}}
            <div class="" style="height: 400px">
                <img src="{{asset($book->image)}}" alt="" class="h-100 w-100 rounded">
            </div>
            {{-- details --}}
            <div class="p-3">
                <h5>{{$book->title}}</h5>
                <p>by<br>
                {{$book->author}}</p>
                <a href="/detail/{{$book->id}}" class="btn btn-primary" title="Book Detail">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

