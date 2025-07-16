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

  #dataImage {
    cursor: pointer;
    transition: 0.3s;
  }

  #dataImage:hover {
    transform: scale(1.03);
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
      <img src="{{asset('assets/img/img-1.jpg')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4" style="">
        <h5 class="mt-5 fs-3 text-uppercase">Peta Cuaca</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">Peta cuaca adalah alat grafis yang menyajikan informasi 
          meteorologi tentang kondisi atmosfer di suatu wilayah pada waktu tertentu. Peta ini dirancang untuk memudahkan 
          pemahaman dan analisis berbagai elemen cuaca.</p>
          <button class="btn btn-primary px-4 py-2 fs-6 mt-5">Selengkapnya</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('assets/img/Peta-cuaca.png')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4">
        <h5 class="mt-5 fs-3 text-uppercase">Data 6 Peta</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">Terdapat 6 Peta yang diberikan, Yakni Peta Awan CB, 
          Prakiraan Cuaca 00 UTC, Wind, Cloud Type, Medium SIGWX, dan High SIGWX</p>
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
          <h1>PETA CUACA</h1>
          <div class="line my-4"></div>
          <p style="color: black">Data - data Cuaca</p>
        </div>
      </div>
</section>
  {{-- About --}}
  <section class="container py-5 mt-3" id="about">
    {{-- Baris 1 --}}
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <div class="card mb-3">
          <img src="{{ Storage::url($awan_cb?->thumbnail) }}" class="card-img-top gallery-webinar" id="dataImage" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $awan_cb?->title !!}</h5>
            <p class="card-text"><i class="bi bi-circle-fill" style="color: rgb(96, 246, 96); font-size:11px;"><small class="text-muted"> Active</small></i></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <div class="card">
          <div class="card-body" style="overflow:scroll; height:540px;">
            <h5 class="card-title">{!! $awan_cb?->title !!}</h5>
            <p class="card-text">{!! $awan_cb?->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    {{-- Baris 2 --}}
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <div class="card mb-3">
          <img src="{{ Storage::url($prakiraan_area_00_UTC->thumbnail) }}" class="card-img-top gallery-webinar" id="dataImage" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $prakiraan_area_00_UTC->title !!}</h5>
            <p class="card-text"><i class="bi bi-circle-fill" style="color: rgb(96, 246, 96); font-size:11px;"><small class="text-muted"> Active</small></i></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <div class="card">
          <div class="card-body" style="overflow:scroll; height:630px;">
            <h5 class="card-title">{!! $prakiraan_area_00_UTC->title !!}</h5>
            <p class="card-text">{!! $prakiraan_area_00_UTC->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    {{-- Baris 3 --}}
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <div class="card mb-3">
          <img src="{{ Storage::url($cloud_type?->thumbnail) }}" class="card-img-top gallery-webinar" id="dataImage" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $cloud_type?->title !!}</h5>
            <p class="card-text"><i class="bi bi-circle-fill" style="color: rgb(96, 246, 96); font-size:11px;"><small class="text-muted"> Active</small></i></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <div class="card">
          <div class="card-body" style="overflow:scroll; height:450px;">
            <h5 class="card-title">{!! $cloud_type?->title !!}</h5>
            <p class="card-text">{!! $cloud_type?->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    {{-- Baris 4 --}}
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <div class="card mb-3">
          <img src="{{ Storage::url($peta_wind?->thumbnail) }}" class="card-img-top gallery-webinar" id="dataImage" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $peta_wind?->title !!}</h5>
            <p class="card-text"><i class="bi bi-circle-fill" style="color: rgb(96, 246, 96); font-size:11px;"><small class="text-muted"> Active</small></i></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <div class="card">
          <div class="card-body" style="overflow:scroll; height:580px;">
            <h5 class="card-title">{!! $peta_wind?->title !!}</h5>
            <p class="card-text">{!! $peta_wind?->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    {{-- Baris 5 --}}
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <div class="card mb-3">
          <img src="{{ Storage::url($medium_level_SIGWX?->thumbnail) }}" class="card-img-top gallery-webinar" id="dataImage" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $medium_level_SIGWX?->title !!}</h5>
            <p class="card-text"><i class="bi bi-circle-fill" style="color: rgb(96, 246, 96); font-size:11px;"><small class="text-muted"> Active</small></i></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <div class="card">
          <div class="card-body" style="overflow:scroll; height:488px;">
            <h5 class="card-title">{!! $medium_level_SIGWX?->title !!}</h5>
            <p class="card-text">{!! $medium_level_SIGWX?->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    {{-- Baris 6 --}}
    <div class="row g-6">
      <div class="col-12 col-lg-6 mt-3">
        <div class="card mb-3">
          <img src="{{ Storage::url($high_level_SIGWX?->thumbnail) }}" class="card-img-top gallery-webinar" id="dataImage" alt="...">
          <div class="card-body">
            <h5 class="card-title">{!! $high_level_SIGWX?->title !!}</h5>
            <p class="card-text"><i class="bi bi-circle-fill" style="color: rgb(96, 246, 96); font-size:11px;"><small class="text-muted"> Active</small></i></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-3">
        <div class="card">
          <div class="card-body" style="overflow:scroll; height:650px;">
            <h5 class="card-title">{!! $high_level_SIGWX?->title !!}</h5>
            <p class="card-text">{!! $high_level_SIGWX?->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  {{-- Akhir About --}}

  {{-- Modals Peta --}}
  <!-- Modal -->
  <div class="modal fade" id="webinar-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{asset('assets/img/Webinar-6.jpeg')}}" alt="" class="modal-webinar">
        </div>
      </div>
    </div>
  </div>
  {{-- Akhir Modals Webinar --}}


@endsection
