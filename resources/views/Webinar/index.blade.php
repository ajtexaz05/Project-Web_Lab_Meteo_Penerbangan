@extends('layout/aplikasiTemplate')

{{-- Data Webinar dari Filament --}}
@php

    // Untuk Data Webinar(Data Belum Digunakan)
    $data_gambar_webinar = get_dataWebinar();

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
            <a class="nav-link" href="#about">Tentang</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#weatherInformation">Informasi Cuaca</a>
          </li> --}}
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
          <h1>WEBINAR</h1>
          <div class="line my-4"></div>
          <p style="color: black">Kumpulan Webinar</p>
        </div>
      </div>
      {{-- Baris ke 1 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center">
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-7.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROGRAM STORIUM<br>STORY METEOROGICAL LABORATORY</h5>
              <p class="card-text">Tema 1 : TEKNOLOGI PRAKIRAAN CUACA BMKG</p>
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-8.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROGRAM STORIUM<br>STORY METEOROGICAL LABORATORY</h5>
              <p class="card-text">Tema 2 : PERKEMBANGAN EL NINO DAN MUSIM HUJAN</p>                 
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-9.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROGRAM STORIUM<br>STORY METEOROGICAL LABORATORY</h5>
              <p class="card-text">Tema 3 : MENITI KISAH LABORATORIUM WCPL ITB</p>                  
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
      </div>
      {{-- Baris ke 2 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center">
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-1.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">PROGRAM STORIUM, STORY METEOROGICAL LABORATORY</h5>
              <p class="card-text">Tema : Dampak Bentuk Garis Pantai Terhadap Curah Hujan Pesisir</p>
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-2.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">WEBINAR<br>STORIUM<br>#5</h5>
              <p class="card-text">Tema : SIDARMA : Sistem Integrasi Radar Cuaca Mandiri BMKG</p>
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-3.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">WEBINAR NEW AVIATION STORIUM<br>#6</h5>
              <p class="card-text">Layanan Meteorologi Penerbangan : Perspektif Global dan Nasional</p>
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
      </div>
      {{-- Baris ke 3 --}}
      <div class="row mt-5" style="display: flex; justify-content:center; align-items:center">
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-4.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">DIBALIK BENCANA HIDROMETEOROLOGI DI WILAYAH INDONESIA, ADA APA?</h5>
              {{-- <p class="card-text"></p>                   --}}
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-5.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">WEBINAR NASIONAL</h5>
              <p class="card-text">Sumut Dilanda Cuaca Ekstrim?<br>Tantangan dan Strategi dalam menghadapinya</p>                  
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3">
          <div class="card shadow-lg p-2" style="width: 17rem">
            <img src="{{asset('assets/img/Webinar-6.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
            <div class="card-body">
              <h5 class="card-title">INTERNATIONAL CONFERENCE</h5>
              <p class="card-text"></p>                  
              {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
            </div>
          </div>
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
