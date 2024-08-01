@extends('layout/aplikasiTemplate')

{{-- Data Webinar dari Filament --}}
@php

    // Untuk Data Peta(Data Belum Digunakan)
    $awan_cb = get_peta_data('AWAN_CB');
    $prakiraan_area_00_UTC = get_peta_data('PRAKIRAAN_AREA_00_UTC');
    $cloud_type = get_peta_data('CLOUD_TYPE');
    $peta_wind = get_peta_data('WIND');
    $medium_level_SIGWX = get_peta_data('MEDIUM_LEVEL_SIGWX');
    $high_level_SIGWX = get_peta_data('HIGH_LEVEL_SIGWX');

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
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="{{asset('assets/img/img-8.JPG')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4" style="">
        <h5 class="mt-5 fs-3 text-uppercase">Tentang Website</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">Ini merupakan Website Lab Meteorologi Penerbangan sebagai bentuk pembelajaran Taruna/i Program Studi Diploma IV 
          Meteorologi yang menghasilkan data yang diperuntukkan bukan hanya untuk mengetahui 
          informasi data pengamatan cuaca harian, namun juga dapat memberikan informasi cuaca penerbangan</p>
          <button class="btn btn-primary px-4 py-2 fs-6 mt-5">Selengkapnya</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('assets/img/img-5.JPG')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4">
        <h5 class="mt-5 fs-3 text-uppercase">Tentang Lab</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">Ini merupakan Website Lab Meteorologi Penerbangan yang bertujuan 
          untuk <br> memberikan data 
          hasil meteorologi penerbangan dan data informasi cuaca kepada masyarakat.
          Hasil data yang diambil merupakan hasil dari pengamatan menggunakan alat alat pengamatan 
          cuaca penerbangan yang ada di  Kampus STMKG.</p>
          <button class="btn btn-primary px-4 py-2 fs-6 mt-5">Selengkapnya</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('assets/img/img-7.JPG')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4">
        <h5 class="mt-5 fs-3 text-uppercase">Tentang Meteorologi Penerbangan</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">
          Data Meteorologi Penerbangan yang dikeluarkan oleh Lab Meteorologi penerbangan STMKG sebagai bentuk pembelajaran Taruna/i Program Studi DIV Meteorologi 
          dalam pengolahan data dan analisis cuaca yang berkaitan dengan cuaca penerbangan 
        </p>
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
          <h1>Tentang</h1>
          <div class="line my-4"></div>
          <p style="color: black">Informasi Tentang LAB</p>
        </div>
      </div>
</section>
  {{-- About --}}
  <section class="container py-5 mt-3" id="about">
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <img src="{{ Storage::url($TentangAbout->thumbnail) }}" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <h2 class="">{!! $TentangAbout->title !!}</h2>
        <p>{!! $TentangAbout->content !!}</p>
        <button class="btn px-5 py-3 d-inline-block fs-6 fw-bold" data-bs-toggle="modal" data-bs-target="#modalAbout">Selengkapnya</button>
      </div>
    </div>
    <div class="row g-6 mt-3">
      <div class="col-12 col-lg-6 mt-3">
        <h2 class="">Tentang Data Penerbangan</h2>
        <p>Data data Meteorologi Penerbangan sangat penting untuk dunia penerbangan. Untuk itu, Data Meteorologi 
          Penerbangan yang dikeluarkan oleh Lab Meteorologi penerbangan STMKG sebagai bentuk pembelajaran Taruna/i 
          Program Studi DIV Meteorologi dalam pengolahan data dan analisis cuaca yang berkaitan dengan cuaca penerbangan</p>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <h2 class="">Tentang Website</h2>
        <p>Ini merupakan Website Lab Meteorologi Penerbangan yang bertujuan untuk memberikan data data meteorologi 
          penerbangan dan data informasi cuaca harian kampus STMKG sebagai bentuk media pembelajaran Taruna/i 
          terutama Program Studi  Diploma IV Meteorologi sehingga nantinya menjadi lulusan yang ahli
           di bidangnya dan dapat memberikan informasi cuaca sebagai bentuk pelayanan kepada masyarakat.
        </p>
      </div>
    </div>
  </section>
  {{-- Akhir About --}}
  
  {{-- Modal About --}}
  <div class="modal fade" id="modalAbout" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <img src="{{ Storage::url($TentangAbout->thumbnail) }}" alt="" class="img-fluid">
            <p>{!! $TentangAbout->content !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Akhir Modal About --}}


@endsection
