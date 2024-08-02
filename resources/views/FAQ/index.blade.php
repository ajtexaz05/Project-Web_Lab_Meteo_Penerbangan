@extends('layout/aplikasiTemplate')

{{-- Data Webinar dari Filament --}}
@php

    $TentangAbout = get_section_data('ABOUT');

@endphp

@section('konten')

<style>
  .c-item {
    height: 480px;
  }

  .c-img {
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6);
  }

</style>

{{-- Carousel --}}
<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="{{asset('assets/img/img-bg.jpg')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4" style="">
        <h5 class="mt-5 fs-3 text-uppercase">FAQ</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">FAQ dirancang untuk memberikan informasi yang 
            berguna dan mengatasi masalah umum yang mungkin dihadapi oleh pengguna, pelanggan, atau audiens.</p>
          <button class="btn btn-primary px-4 py-2 fs-6 mt-5">Selengkapnya</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('assets/img/img-airplane.jpg')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4">
        <h5 class="mt-5 fs-3 text-uppercase">Pertanyaan Seputar<br>Meteo Penerbangan</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">FAQ (Frequently Asked Questions) terkait Meteo Penerbangan adalah 
            kumpulan pertanyaan dan jawaban yang sering diajukan mengenai informasi cuaca dan kondisi meteorologi yang 
            memengaruhi penerbangan</p>
          <button class="btn btn-primary px-4 py-2 fs-6 mt-5">Selengkapnya</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
{{-- Akhir Carousel --}}

{{-- Tentang, Ini menggunakan section untuk judul punyanya webinar, agar tidak usah buat yang baru lagi --}}
<section class="webinar bg-light p-5" id="webinar">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col-lg-6 m-auto">
          <p>Informasi</p>
          <h1>FAQ</h1>
          <div class="line my-4"></div>
          <p style="color: black">Frequently Asked Question</p>
        </div>
      </div>
</section>
 


@endsection
