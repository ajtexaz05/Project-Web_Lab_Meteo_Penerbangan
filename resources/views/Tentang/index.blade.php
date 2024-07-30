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

@endphp

@section('konten')


{{-- Tentang --}}
<section class="webinar bg-light p-5" id="webinar">
    <div class="container py-5">
      <div class="row text-center mb-4">
        <div class="col-lg-6 m-auto">
          <p>Informasi</p>
          <h1>Tentang</h1>
          <div class="line my-4"></div>
          <p style="color: black">Informasi Tentang LAB</p>
        </div>
      </div>
      {{-- Baris ke 1 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center"></div>
      {{-- Baris ke 2 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center"></div>
      {{-- Baris ke 3 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center"></div>
      
</section>
  {{-- Akhir Webinar --}}



@endsection
