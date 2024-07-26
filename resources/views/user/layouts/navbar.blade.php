<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('assets/logo.png') }}" alt="Logo" class="d-inline-block align-text-center">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="layananDropdown">
                        <li><a class="dropdown-item" href="{{ url('aproval') }}">Aproval Kaprodi</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Pengaduan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('galeri') }}">Agenda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="{{ url('visi-misi') }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="{{ url('dosen') }}">Dosen</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Akreditasi</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">SO</a></li>
                        <li><a class="dropdown-item" href="{{ url('alumni') }}">Alumni</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="risetDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Riset dan Pengabdian
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="risetDropdown">
                        <li><a class="dropdown-item" href="{{ url('jurnal') }}">Daftar Jurnal</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Profil Sinta</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="infoDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Info Penting
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="infoDropdown">
                        <li><a class="dropdown-item" href="{{ url('terkini') }}">Terkini</a></li>
                        <li><a class="dropdown-item" href="{{ url('lomba') }}">Lomba</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lainnya') }}">Lainnya</a>
                </li>
            </ul>
            <div class="navbar-nav ms-auto">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                    {{-- Uncomment the line below if you have a register route defined --}}
                    {{-- <a href="{{ route('register') }}" class="btn btn-primary">Register</a> --}}
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endauth
            </div>
        </div>
    </div>
</nav>
