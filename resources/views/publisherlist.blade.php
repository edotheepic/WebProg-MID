@extends('layout')

@section('title', 'Publishers')

@section('subtitle', 'Publisher List')

@section('content')

    <div class="row">
        @foreach($publishers as $publisher)
            <div class="col-3 p-1">
                <div class="card bg-light">
                    <img src="{{asset($publisher->image)}}" class="card-img-top img-fluid" alt="" style="height: 16rem">
                    <div class="card-body">
                        <h5 class="card-title">{{$publisher->name}}</h5>
                        <p class="card-text">Address:<br>
                            {{$publisher->address}}</p>
                        <a href="/publisher/{{$publisher->id}}" class="btn btn-primary" title="Book Detail">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
