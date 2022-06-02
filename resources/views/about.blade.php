@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h4> {{ $nama }} </h4>
    <p> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">
@endsection