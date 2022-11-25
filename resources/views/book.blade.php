
<div class="row">
    @foreach($books as $book)
        <div class="col-3 p-1">
            <div class="card bg-light">
                <img src="{{asset($book->image)}}" class="card-img-top img-fluid" alt="" style="height: 28rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">by<br>
                        {{$book->author}}</p>
                    <a href="/detail/{{$book->id}}" class="btn btn-primary" title="Book Detail">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
