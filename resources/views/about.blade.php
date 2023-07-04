@extends('layouts.main')

@section('child-body')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $desc }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection