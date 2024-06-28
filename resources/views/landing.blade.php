@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
    <div class="landing" style="background: url('{{ asset('images/landing1.jpg') }}') no-repeat center center/cover;">
        <div class="welcome-box">
            <h1>SELAMAT DATANG DI</h1>
            <h2>RUMAH SEHAT HERBAL INTI SEHAT TCM</h2>
            <button class="button-primary">DAFTAR SEKARANG</button>
        </div>
    </div>

    <div class="grid">
        <div class="card">
            <div class="card__content">
                <h1 class="card__header">Hubungi Kami</h1>
                <div class="card__text-wrapper">
                    <p class="card__text">No. Handphone :</p>
                </div>
                <a class="bn60" href="tel:+6281234432112">
                    <img src="https://pluspng.com/img-png/phone-png-phone-png-file-1969.png" alt="Phone Icon">
                    <span>+6285142998875</span>
                </a>
                <div class="card__text-wrapper">
                    <p class="card__text">WhatsApp :</p>
                </div>
                <a class="bn60" href="https://wa.me/081234543234">
                    <img src="https://images.freeimages.com/fic/images/icons/2779/simple_icons/4096/whatsapp_4096_black.png?fmt=webp&h=350" alt="WhatsApp Icon">
                    <span>+6287823319466</span>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card__content">
                <h1 class="card__header">Pesan Layanan</h1>
                <div class="card__text-wrapper">
                    <p class="card__text"><span class="icon">&#x1F4CD;</span> Lokasi :  Jalan Kudus No.36, RT. O5, Tanah Haji Permai, Lingkugan Punia Saba, Kelurahan Punia, Kecamatan Mataram, Kota Mataram, Provinsi Nusa Tenggara Barat</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card__content">
                <h1 class="card__header">Pesan Layanan</h1>
                <div class="card__text-wrapper">
                    <p class="card__text">Reservasi</p>
                </div>
                <a class="bn60" href="https://wa.me/081234543234">
                    <img src="https://images.freeimages.com/fic/images/icons/2779/simple_icons/4096/whatsapp_4096_black.png?fmt=webp&h=350" alt="WhatsApp Icon">
                    <span>Website</span>
                </a>
                <div class="card__text-wrapper">
                    <p class="card__text">WhatsApp</p>
                </div>
                <a class="bn60" href="tel:+6281234432113">
                    <img src="https://images.freeimages.com/fic/images/icons/2779/simple_icons/4096/whatsapp_4096_black.png?fmt=webp&h=350" alt="WhatsApp Icon">
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mengapa-kami-container">
        <div class="section-title">
            <h2>Kami Selalu Siap Membantu Anda &</h2>
            <h2>Keluarga Anda</h2>
            <img src="{{ asset('images/section-img.png') }}" alt="Section Image">
        </div>

        <!-- ======= Mengapa Kami Section ======= -->
        <section id="mengapa-kami" class="mengapa-kami">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-lg-5">
                        <h3>Mengapa Kami ?</h3>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/188/188333.png" alt="Icon Share">
                            </div>
                            <h4 class="title">
                                <a href="">Pengobatan Secara Tradisional</a>
                            </h4>
                            <p class="description">Menerapkan pengobatan dengan obatan herbal yang diracik sendiri sesuai penyakit</p>
                        </div>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/3779/3779288.png" alt="Icon Loader">
                            </div>
                            <h4 class="title">
                                <a href="">Pengobatan Berkelanjutan</a>
                            </h4>
                            <p class="description">Kesinambungan pelayanan dilakukan mulai dari pemeriksaan sampai pasien sembuh</p>
                        </div>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/11063/11063118.png" alt="Icon Search">
                            </div>
                            <h4 class="title">
                                <a href="">Praktik Berbasis Bukti</a>
                            </h4>
                            <p class="description">Seluruh pasien dikaji berdasarkan riwayat penyakit dahulu, keluarga, dan pola hidup</p>
                        </div>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/2917/2917995.png" alt="Icon Group">
                            </div>
                            <h4 class="title">
                                <a href="">Kolaborasi bersama para ahli</a>
                            </h4>
                            <p class="description">Mengembangkan kolaborasi bersama para ahli penyakit kronis tanpa operasi</p>
                        </div>
                        <div class="row no-gutters">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
                        <a href="https://www.instagram.com/reel/C59x6XeBX2S/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Mengapa Kami Section ======= -->
    </div>
@endsection
