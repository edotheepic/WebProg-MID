@extends('layout')

@section('title', 'Detail')

@section('subtitle', 'Books Detail')

@section('content')

<div class="row bg-light border">
    <div class="col-12">
            {{-- image --}}
            <div class="text-center">
                <img src="{{asset($book->image)}}" alt="" class="w-50 rounded">
            </div>
            {{-- details --}}
            <div class="p-5">
                <p>Title : {{$book->title}}</p>
                <p>Author : {{$book->author}}</p>
                <p>Publisher : {{$publisher->name}}</p>
                <p>Year : {{$book->year}}</p>
                <p>Synopsis :</p>
                <p>{{$synopsis}}</p>
            </div>
    </div>
</div>
@endsection
