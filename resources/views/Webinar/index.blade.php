@extends('layout/aplikasiTemplate')

{{-- Data Webinar dari Filament --}}
@php

    // Untuk Data Webinar(Data Belum Digunakan)
    $data_gambar_webinar = get_dataWebinar();

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
      <img src="{{asset('assets/img/Webinar-6.jpeg')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4" style="">
        <h5 class="mt-5 fs-3 text-uppercase">Kumpulan Webinar</h5>
        <p class="fw-bolder shadow-lg text-capitalize mt-5">Peta cuaca adalah alat grafis yang menyajikan informasi 
          meteorologi tentang kondisi atmosfer di suatu wilayah pada waktu tertentu. Peta ini dirancang untuk memudahkan 
          pemahaman dan analisis berbagai elemen cuaca.</p>
          <button class="btn btn-primary px-4 py-2 fs-6 mt-5">Selengkapnya</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('assets/img/Webinar-8.jpeg')}}" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4">
        <h5 class="mt-5 fs-3 text-uppercase">Webinar Pembelajaran</h5>
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

  {{-- Webinar --}}
<section class="webinar bg-light p-5" id="webinar">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col-lg-6 m-auto">
          <p>Informasi</p>
          <h1>WEBINAR</h1>
          <div class="line my-4"></div>
          <p style="color: black">Kumpulan Webinar</p>
        </div>
      </div>
      @php
          $i = 1;    
      @endphp
      {{-- Baris ke 1 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center">
        @foreach ($data_gambar_webinar as $item)
        <div class="col-lg-3 col-sm-3 mt-4">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{ Storage::url($item->thumbnail) }}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">{!! $item->title !!}</h5>
              <p class="card-text">{!! $item->content !!}</p>
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        @php
            $i++;
        @endphp

        @endforeach
        
      </div>
    </div>
</section>
  {{-- Akhir Webinar --}}

  {{-- Modals Webinar --}}
  <!-- Modal -->
  <div class="modal fade" id="webinar-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Image Webinar</h1>
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
