@extends('layout/aplikasiTemplate')

{{-- Data Webinar dari Filament --}}
@php

    // Untuk data FAQ (Belum digunakan)
    $data_FAQ = get_dataTanyaJawab();

@endphp

@section('konten')

<style>

/* Ini Dikomentar sementara karena mempengaruhi tampilan */
/* * {
      box-sizing: border-box;
      font-family: 'PT Sans';
  } */


  /* body {
      font-family: 'Hind', sans-serif;
      background: #fff;
      color: #4d5974;

  } */

  /* .container {
      padding: 1rem;
      width: 100%;
      max-width: 57rem;
  } */

  .accordion .accordion-item {
      border-bottom: 1px solid #ff0000;
  }

  .accordion .accordion-item button[aria-expanded='true'] {
      border-bottom: 1px solid #ff0000;
  }

  .accordion button {
      position: relative;
      display: block;
      text-align: left;
      width: 100%;
      padding: 1em 0;
      color: black;
      font-size: 1.15rem;
      font-weight: 400;
      border: none;
      background: none;
      outline: none;
  }

  .accordion button:hover,
  .accordion button:focus {
      cursor: pointer;
      color: #ff0000;
  }

  .accordion button:hover::after,
  .accordion button:focus::after {
      cursor: pointer;
      color: #ff0000;
      border: 1px solid #03b5d2;
  }

  .accordion button .accordion-title {
      padding: 1em 1.5em 1em 0;
  }

  .accordion button .icon {
      display: inline-block;
      position: absolute;
      top: 18px;
      right: 0;
      width: 22px;
      height: 22px;
      border: 1px solid;
      border-radius: 22px;
  }

  .accordion button .icon::before {
      display: block;
      position: absolute;
      content: '';
      top: 9px;
      left: 5px;
      width: 10px;
      height: 2px;
      background: currentColor;
  }

  .accordion button .icon::after {
      display: block;
      position: absolute;
      content: '';
      top: 5px;
      left: 9px;
      width: 2px;
      height: 10px;
      background: currentColor;
  }

  .accordion button[aria-expanded='true'] {
      color: #ff0000;
  }

  .accordion button[aria-expanded='true'] .icon::after {
      width: 0;
  }

  .accordion button[aria-expanded='true']+.accordion-content {
      opacity: 1;
      max-height: 9em;
      transition: all 200ms linear;
      will-change: opacity, max-height;
  }

  .accordion .accordion-content {
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      transition: opacity 200ms linear, max-height 200ms linear;
      will-change: opacity, max-height;
  }

  .accordion .accordion-content p {
      font-size: 1rem;
      font-weight: 300;
      margin: 2em 0;
  }

  @media (max-width: 768px) {
      .container {
          padding: 2rem;
      }

      .accordion button {
          font-size: 1rem;
          padding: 0.75em 0;
      }

      .accordion .accordion-content p {
          font-size: 0.9rem;
          margin: 1.5em 0;
      }
  }

  @media (max-width: 480px) {
      .container {
          padding: 1rem;
      }

      .accordion button {
          font-size: 0.9rem;
          padding: 0.5em 0;
      }

      .accordion .accordion-content p {
          font-size: 0.8rem;
          margin: 1em 0;
      }
  }

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
<section class="webinar bg-light p-3" id="webinar">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 m-auto">
          <p>Informasi</p>
          <h1>FAQ</h1>
          <div class="line my-4"></div>
          <p style="color: black">Frequently Asked Question</p>
        </div>
      </div>
</section>

{{-- FAQ --}}

@php
    $i = 1;
@endphp

<section class="tabel bg-light" style="background-color: white;">
  <div class="container">
      <div class="accordion p-5">

        @foreach ($data_FAQ as $item)          
          <div class="accordion-item p-3"><button aria-expanded="false" id="accordion-button-1"><span class="accordion-title">{!! $item->pertanyaan !!}</span><i class="bi bi-caret-down-fill" style="float: right;"></i></button>
              <div class="accordion-content">
                  <p>{!! $item->jawaban !!}</p>
              </div>
          </div>
          @php
              $i++;
          @endphp
        @endforeach

      </div>
  </div>
</section>

<script>
  const items = document.querySelectorAll('.accordion button');

  function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');

      for (i = 0; i < items.length; i++) {
          items[i].setAttribute('aria-expanded', 'false');
      }

      if (itemToggle == 'false') {
          this.setAttribute('aria-expanded', 'true');
      }
  }

  items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>

@endsection
