@extends('layout')

@section('title', 'Category')

@section('subtitle', $category->name)

@section('content')

    @include('book')

@endsection
