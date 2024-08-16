@extends('user.layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Section Header -->
    <section id="header-section">
        <h1 class="text-center text-white">Struktur Organisasi</h1>
    </section>

    <!-- Section SO -->
    <section id="so" class="d-flex align-items-center justify-content-center mb-5 mt-5">
        <div class="container text-center">
            <img src="{{ url('/assets/so.png') }}" alt="Image" class="img-fluid">
        </div>
    </section>

@endsection
