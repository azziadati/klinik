@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('content')
    <div class="landing-kontak" style="background: url('{{ asset('images/landing1.jpg') }}') no-repeat center center/cover;">
        <div class="welcome-box">
            <h1>HUBUNGI KAMI</h1>
            <!-- Bagian Foto dan Detail Dokter -->
            <div class="doctor-profile">
                <img src="{{ asset('images/doktor.png') }}" alt="Foto Dokter" class="doctor-photo">
                <div class="doctor-details">
                    <h3>Mulyadi RH</h3>
                    <p>Spesialis Penyakit Dalam</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Tentang Kami</h2>
                    <p>Rumah Sehat Herbal Inti sehat TCM adalah sebuah Klinik Tradisional dari ramuan Cina Kuno super mujarab yang ahli dalam penyakit kronis tanpa operasi</p>
                    <br>
                    <p>No. Induk Berusaha : 1243000241405</p>
                    <p>Sertifikat Standar : 1240002414050001</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                        <h2 class="lg-view">Hubungi Kami</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" name="name" placeholder="Nama Lengkap" required>
                        <input type="text" name="address" placeholder="Alamat" required>
                        <input type="email" name="email" placeholder="Alamat Email" autocomplete="off" required>
                        <input type="phone" name="phone" placeholder="Telepone" autocomplete="off" required>
                        <textarea rows="10" name="message" placeholder="Tulis Pertanyaan" required></textarea>
                        <button type="submit">Kirim Pertanyaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
