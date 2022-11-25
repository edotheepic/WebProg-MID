@extends('layout')

@section('title', 'Publishers')

@section('subtitle', 'Publisher List')

@section('content')

<div class="row">
    @foreach($publishers as $publisher)
    <div class="col-3 p-1">
        <div class="border rounded bg-light">
            {{-- image --}}
            <div class="" style="height: 200px">
                <img src="{{asset($publisher->image)}}" alt="" class=" h-100 w-100 rounded">
            </div>
            {{-- details --}}
            <div class="p-3">
                <h5>{{$publisher->name}}</h5>
                <p>Address:<br>
                {{$publisher->address}}</p>
                <a href="/publisher/{{$publisher->id}}" class="btn btn-primary" title="Book Detail">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
