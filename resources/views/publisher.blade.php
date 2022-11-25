@extends('layout')

@section('title', 'Publisher')

@section('subtitle')

    {{$publisher->name}}<br>
    Address - {{$publisher->address}}<br>
    Phone - {{$publisher->phone}}<br>
    Email - {{$publisher->email}}

@endsection

@section('content')

    @include('book')

@endsection
