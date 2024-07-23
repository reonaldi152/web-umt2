@extends('user.layouts.app')

@section('title', 'Welcome')

@section('content')

    {{-- Section Hero --}}
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative">
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-center align-items-center">
                <div class="col col-lg-6 text-white">
                    <h1 class="mb-3 fs-1 fw-bold">HMIF - ITI</h1>
                    <h6 class="mb-3 fs-4">Himpunan Mahasiswa Teknik Informatika Institut Teknologi Indonesia</h6>
                    <p class="fw-light">Mengembangkan potensi mahasiswa Teknik Informatika <br> dengan berlandaskan Tri
                        Dharma Perguruan
                        Tinggi
                    </p>
                </div>
                {{-- <div class="col col-lg-4 text-center">
                    <img src="{{ url('/assets/hero.png') }}" alt="" srcset="">
                </div> --}}
            </div>

        </div>
    </section>

    {{-- AGENDA DAN PENGUMUMAN --}}
    <section>
        <div class="container mt-5">
            <div class="col">
                <h3 class="fs-3 fw-bolder mb-4">Agenda Dan Pengumuman</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($agendas as $agenda)
                    <div class="col">
                        <div class="card h-100">
                            <div class="home-card-img-top">
                                <img src="{{ asset('storage/' . $agenda->image) }}" alt="Placeholder image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $agenda->title }}</h5>
                                <p class="card-text">{{ $agenda->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- TALENTA TERBAIK --}}
    <section>
        <div class="container mt-5">
            <div class="col">
                <h3 class="fs-3 fw-bolder mb-4">Talenta Terbaik</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($talentas as $talenta)
                    <div class="col">
                        <div class="card h-100">
                            <div class="home-card-img-top">
                                <img src="{{ $talenta->image }}" alt="Placeholder image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ asset('storage/' . $talenta->image) }}</h5>
                                <p class="card-text">{{ $talenta->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ALUMNI --}}
    <section>
        <div class="conatiner mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img-top">
                            <img src="https://placehold.co/100x100" alt="Profile Image" class="rounded-circle">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AGIT AMRULLAH, M.KOM.</h5>
                            <hr>
                            <p class="card-text"><strong>Topik Ditawarkan</strong></p>
                            <p class="card-text">Iot, Microcontroller, Smart City, Data Mining</p>
                            <p class="card-text"><em>"Ora et Labora"</em></p>
                            <div class="social-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-tiktok"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
