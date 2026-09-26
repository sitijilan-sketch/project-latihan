@extends('layouts.app')

@section('title', 'home')

@section('content')
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <h2>selamat datang</h2>
        <p class="text-muted">ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
        <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Profile</a>
    </div>
</div>
@endsection