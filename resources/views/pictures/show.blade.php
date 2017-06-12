@extends('layouts.app')

@section('content')
    <h1>{{ $picture->description }}</h1>
    <img src="{{ $picture->path }}" alt="picture">
@endsection