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
    
{{-- Main Navbar --}}
<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">LAB. <span>METEO PENERBANGAN</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dataPeta">Peta Lengkap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dataWebinar">Webinar</a>
          </li>
        </ul>
        <a href="" class="btn btn-brand ms-lg-3 tombol-contact" style="
                    padding: 9px 24px;
                    background-color: #ff0000;
                    color: white;
                    border-color: #ff0000;
                    transition:0.4s;" 
            onmouseover="this.style.backgroundColor='white'; this.style.color='#ff0000';"
            onmouseout="this.style.color='white'; this.style.backgroundColor='#ff0000'; this.style.borderColor='#ff0000';"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Kontak Kami</a>
      </div>
    </div>
  </nav>
  {{-- Akhir Main Navbar --}}

  {{-- Modal Navbar Bagian Contact --}}
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="{{asset('assets/img/img-8.JPG')}}" alt="">
                    <h3 style="color: #ff0000">Kontak Kami</h3>
                    <p>Anda bisa menghubungi kami di sini</p>
                  </div>
                  <div class="col-lg-8">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                      </div>
                      <div class="col mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Last Name" required>
                      </div>
                    </div>
                    <div class="mb-2">
                      <label for="emailAddress" class="form-label">Email</label>
                      <input type="text" class="form-control" id="emailAddress" placeholder="Email Address" required>
                    </div>
                    <div class="mb-2">
                      <label for="subjectIni" class="form-label">Subject</label>
                      <input type="text" class="form-control" id="subjectIni" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                      <label for="pesanIni">Message</label>
                      <textarea name="pesanIni" id="pesanIni" rows="3" class="form-control" placeholder="Write Your Message Here" required></textarea>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn" style="background-color: #ff0000; color:white;">Kirim</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Akhir Modal Navbar Bagian Contact --}}


{{-- Webinar --}}
<section class="webinar bg-light p-5" id="webinar">
    <div class="container py-5">
      <div class="row text-center mb-4">
        <div class="col-lg-6 m-auto">
          <p>Informasi</p>
          <h1>PETA</h1>
          <div class="line my-4"></div>
          <p style="color: black">Cloud Type, SIGWX, Wind, dll.</p>
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
