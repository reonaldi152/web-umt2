<nav class="navbar navbar-expand-lg navbar-light navbar-transparan mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('assets/logo.png') }}" alt="Bootstrap" width="48" class="d-inline-block align-text-center">
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center p-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('aproval') }}">Aproval Kaprodi</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Pengaduan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('galeri') }}">Agenda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('visi-misi') }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="{{ url('dosen') }}">Dosen</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Akreditasi</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Dosen</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">SO</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Alumni</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Riset dan Pengabdian
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('jurnal') }}">Daftar Jurnal</a></li>
                        <li><a class="dropdown-item" href="{{ url('sinta') }}">Profil Sinta</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Info Penting
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('terkini') }}">Terkini</a></li>
                        <li><a class="dropdown-item" href="{{ url('lomba') }}">Lomba</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lainnya') }}">Lainnya</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
