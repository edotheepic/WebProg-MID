@extends('layout')

@section('title', 'Detail')

@section('subtitle', 'Books Detail')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card bg-light">
                <div class="text-center">
                    <img src="{{asset($book->image)}}" alt="" class="w-50 rounded">
                </div>
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
    </div>

@endsection
