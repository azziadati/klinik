<header>
    <div class="logo-container">
        <img src="{{ asset('images/tcm2.png') }}" alt="Logo">
    </div>
    <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/reservasi') }}">Daftar Layanan</a>
        <a href="{{ route('consultations.index') }}">Konsultasi</a>
        <a href="{{ url('/kontak') }}">Kontak</a>
        <a href="{{ url('/login') }}" class="button-signin">Masuk</a>
        <a href="{{ route('register') }}" class="button-signup">Daftar Akun</a>
    </nav>
</header>
