@extends('layout.spp')

@section('navSiswa')
Pembayaran SPP
@endsection

@section('siswa')
<div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <!-- Gambar siswa -->
                <div class="card-siswa">
                    <div class="content">
                        <div class="logo-major">
                            <img class="logo" src="img/Logo-rpl.jpeg" alt="Logo">
                        </div>
                        <div class="major">
                            Software And Development
                        </div>
                    </div>
                    <div class="image-container-siswa">
                        <img class="image-siswa" src="img/Logo-eci.jpg" alt="Card Image">
                    </div>
                    <div class="name">
                        Erwiyana
                    </div>
                </div>  
            </div>
            <div class="button-container col-md-6">
                <!-- Button -->
                <div class="d-flex flex-column align-items-center button">
                    <a href="/"><button class="btn-element" type="button">Bulan</button></a>
                    <a href="/about"><button class="btn-element" type="button">Pembayaran</button></a>
                    <a href="/about"><button class="btn-element" type="button">Nominal</button></a>
                </div>
            </div>
        </div>
</div>
@endsection

@section('as')
Sebagai Siswa
@endsection