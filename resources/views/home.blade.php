@php

  // Untuk Setting
  $lokasi_data = get_setting_value('_lokasi');
  $waktu_data = get_setting_value('_waktu');
  $kalender_data = get_setting_value('_kalender');
  $windSpeed_data = get_setting_value('_wind_speed');
  $windDirection_data = get_setting_value('_wind_direction');
  $humidity_data = get_setting_value('_humidity');
  $minTemperature_data = get_setting_value('_min_temperature');
  $temperature_data = get_setting_value('_temperature');
  $maxTemperature_data = get_setting_value('_max_temperature');

  // Untuk Data Banner
  $data_gambar_lengkap = get_dataBanner();
    
  // Untuk Section
  $Banner1 = get_section_data('JUMBOTRON1');
  $Banner2 = get_section_data('JUMBOTRON2');
  $Banner3 = get_section_data('JUMBOTRON3');
  $Banner4 = get_section_data('JUMBOTRON4');
  $TentangAbout = get_section_data('ABOUT');

@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab Meteo Penerbangan</title>

    {{-- Link Style CSS --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {{-- Link CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Box Icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>

    {{-- Navbar Top --}}
    {{-- <nav class="top-nav fixed-top" id="home">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-auto">
            <p>
              <i class='bx bx-envelope'></i>
              <span>labMeteo@gmail.com</span>
            </p>
            <p>
              <i class='bx bx-phone'></i>
              <span>+62346679523</span>
            </p>
          </div>
          <div class="col-auto">
            <div class="social-links">
              <a href=""><i class='bx bxl-instagram-alt' ></i></a>
              <a href=""><i class='bx bxl-twitter'></i></a>
              <a href=""><i class='bx bxl-facebook-circle' ></i></a>
              <a href=""><i class='bx bxl-youtube'></i></a>
            </div>
          </div>
        </div>
      </div>
    </nav> --}}
    {{-- Akhir Navbar Top --}}

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
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#weatherInformation">Informasi Cuaca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gambar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#webinar">Webinar</a>
            </li>
          </ul>
          <a href="" class="btn btn-brand ms-lg-3 tombol-contact" style="
                      padding: 9px 24px;
                      background-color: #ff0000;
                      color: white;
                      border-color: #ff0000;" 
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

    {{-- Banner Carousel --}}
    <div class="slider">

      {{-- List --}}
      <div class="list">

        <div class="item">
          <img src="{{ Storage::url($Banner1->thumbnail) }}" alt="">

          <div class="content">
            <div class="title shadow-sm">Meteorologi Penerbangan</div>
            <div class="type shadow-sm mt-2">{{ $Banner1->title }}</div>
            <div class="description">
              {!! $Banner1->content !!}
            </div>
            <div class="button">
              <a href="#weatherInformation"><button>Selengkapnya</button></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="{{ Storage::url($Banner2->thumbnail) }}" alt="">

          <div class="content">
            <div class="title shadow-sm">Meteorologi Penerbangan</div>
            <div class="type shadow-sm mt-2">{{ $Banner2->title }}</div>
            <div class="description">
              {!! $Banner2->content !!}
            </div>
            <div class="button">
              <a href="#weatherInformation"><button>Selengkapnya</button></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="{{ Storage::url($Banner3->thumbnail) }}" alt="">

          <div class="content">
            <div class="title shadow-sm">Meteorologi Penerbangan</div>
            <div class="type shadow-sm mt-2">{{ $Banner3->title }}</div>
            <div class="description">
              {!! $Banner3->content !!}
            </div>
            <div class="button">
              <a href="#weatherInformation"><button>Selengkapnya</button></a>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="{{ Storage::url($Banner4->thumbnail) }}" alt="">

          <div class="content">
            <div class="title shadow-sm">Meteorologi Penerbangan</div>
            <div class="type shadow-sm mt-2">{{ $Banner4->title }}</div>
            <div class="description">
              {!! $Banner4->content !!}
            </div>
            <div class="button">
              <a href="#weatherInformation"><button>Selengkapnya</button></a>
            </div>
          </div>
        </div>

      </div>

      {{-- Thumbnail --}}
      <div class="thumbnail">

        <div class="item">
          <img src="{{ Storage::url($Banner1->thumbnail) }}" alt="">
        </div>
        <div class="item">
          <img src="{{ Storage::url($Banner2->thumbnail) }}" alt="">
        </div>
        <div class="item">
          <img src="{{ Storage::url($Banner3->thumbnail) }}" alt="">
        </div>
        <div class="item">
          <img src="{{ Storage::url($Banner4->thumbnail) }}" alt="">
        </div>

      </div>

      {{-- Next Prev Arrows --}}
      <div class="nextPrevArrows">
        <button class="prev"><i class="bi bi-caret-left-fill"></i></button>
        <button class="next"><i class="bi bi-caret-right-fill"></i></button>
      </div>

    </div>
    {{-- Akhir Banner Carousel --}}

    {{-- MileStone --}}
    <section class="freelancer-available py-5 bg-danger">
      <div class="container-lg py-4">
        <div class="row justify-content-center mb-4">
          <div class="col-lg-8 text-center">
            <p class="text-light fs-5">Informasi Lengkap</p>
            <h2>Mengenai Cuaca Penerbangan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class="card-body text-center">
                <h5 class="card-title">Wind Speed</h5>
                <p class="card-text">
                  <i class="bi bi-wind fs-2"></i>
                </p>
                <a href="#weatherInformation" class="btn tombol-selengkapnya" style="background-color: #ff0000; color:white;">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class="card-body text-center">
                <h5 class="card-title">Humidity</h5>
                <p class="card-text">
                  <i class="bi bi-droplet fs-2"></i>
                </p>
                <a href="#weatherInformation" class="btn" style="background-color: #ff0000; color:white;">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class="card-body text-center">
                <h5 class="card-title">Wind Direction</h5>
                <p class="card-text">
                  <i class="bi bi-compass fs-2"></i>
                </p>
                <a href="#weatherInformation" class="btn" style="background-color: #ff0000; color:white;">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card shadow p-3 mb-5 bg-body rounded">
              <div class="card-body text-center">
                <h5 class="card-title">Temperature</h5>
                <p>
                  <i class="bi bi-thermometer-sun fs-2"></i>
                </p>
                <a href="#weatherInformation" class="btn" style="background-color: #ff0000; color:white;">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    {{-- Akhir MileStone --}}

     {{-- About --}}
     <section class="container py-5 mt-4" id="about">
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

    {{-- Weather Information --}}
    <section class="information py-5 bg-light text-center" id="weatherInformation">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <p>Informasi</p>
            <h1>Informasi Cuaca</h1>
            <div class="line my-4"></div>
            <p style="color: black">Informasi Prakiraan Cuaca yang berlaku esok hari</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h5 class="head1 py-2">Location</h5>
                    <span><i class="bi bi-geo-alt fs-2"></i></span>
                    <p class="per1 mt-4">{{ $lokasi_data }}</p>
                  </div>
                  <div class="col-sm-3">
                    <h5 class="head1 py-2">Time</h5>
                    <span><i class="bi bi-alarm fs-2"></i></span>
                    <h2 class="mt-2">{{ $waktu_data }}</h2>
                  </div>
                  <div class="col-sm-3">
                    <h5 class="py-2">Date</h5>
                    <span><i class="bi bi-calendar-date fs-2"></i></span>
                    <p class="mt-4">{{ $kalender_data }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <span><i class="bi bi-wind fs-2"></i></span>
                <h5 class="head1 py-3">Wind Speed</h5>
                <p class="per1">{{ $windSpeed_data }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <span><i class="bi bi-compass fs-2"></i></span>
                <h5 class="head1 py-3">Wind Direction</h5>
                <p class="per1">{{ $windDirection_data }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <span><i class="bi bi-droplet fs-2"></i></span>
                <h5 class="head1 py-3">Humidity</h5>
                <p class="per1">{{ $humidity_data }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <span><i class="bi bi-thermometer-low fs-2"></i></span>
                <h5 class="head1 py-3">Min. Temperature</h5>
                <p class="per1">{{ $minTemperature_data }}&deg;C</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <span><i class="bi bi-thermometer-half fs-2"></i></span>
                <h5 class="head1 py-3">Temperature</h5>
                <p class="per1">{{ $temperature_data }}&deg;C</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mt-2 mb-2">
            <div class="card py-3 shadow-sm">
              <div class="card-body">
                <span><i class="bi bi-thermometer-high fs-2"></i></span>
                <h5 class="head1 py-3">Max. Temperature</h5>
                <p class="per1">{{ $maxTemperature_data }}&deg;C</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Akhir Weather Information --}}

    {{-- Image Pop Up --}}
    <div class="port bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-header text-center">
              <h2>Data Lengkap</h2>
              <p>Ada di gambar ini</p>
            </div>
          </div>
        </div>
        <div class="row" style="display: flex; justify-content:center;">
          <div class="col-lg-4 col-sm-12">
            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#popup1">

              @foreach ($data_gambar_lengkap as $item)
                <img src="{{Storage::url($item->thumbnail)}}" alt=""> 
              @endforeach

              <div class="overlay">
              @foreach ($data_gambar_lengkap as $item)
                <h3>{{($item->title)}}</h3>
                <p>{!!($item->content)!!}</p>   
              @endforeach

                <a href="#" class="btn" style="background-color: #ff0000; color:white">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Akhir Image Pop Up --}}
    {{-- Popup Modals --}}
    <div class="modal fade" id="popup1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

          @foreach ($data_gambar_lengkap as $item)
            <img src="{{Storage::url($item->thumbnail)}}" alt="" width="90%"> 
          @endforeach

        </div>
      </div>
    </div>
    {{-- Akhir Popup Modals --}}

    {{-- Image --}}
    <section class="gallery" id="gallery">
      <div class="container-lg py-5 mt-5">
        <div class="row text-center">
          <div class="col-lg-6 m-auto">
            <p>Informasi</p>
            <h1>GAMBAR</h1>
            <div class="line my-4"></div>
            <p style="color: black">Dokumentasi yang ada di Lab Meteorologi Penerbangan</p>
          </div>
        </div>
        <div class="row" style="display: flex; justify-content:center; align-items:center;">
          <div class="col-lg-3">
            <img src="{{asset('assets/img/img-3.jpg')}}" alt="" class="gallery-item">
          </div>
          <div class="col-lg-3">
            <img src="{{asset('assets/img/img-5.JPG')}}" alt="" class="gallery-item">
          </div>
          <div class="col-lg-3">
            <img src="{{asset('assets/img/img-2.jpg')}}" alt="" class="gallery-item">
          </div>
        </div>
        <div class="row mt-4" style="display: flex; justify-content:center; align-items:center;">
          <div class="col-sm-3">
            <img src="{{asset('assets/img/img-8.JPG')}}" alt="" class="gallery-item">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('assets/img/img-4.JPG')}}" alt="" class="gallery-item">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('assets/img/img-6.JPG')}}" alt="" class="gallery-item">
          </div>
        </div>
        <div class="row mt-4" style="display: flex; justify-content:center; align-items:center;">
          <div class="col-sm-3">
            <img src="{{asset('assets/img/img-13.JPG')}}" alt="" class="gallery-item">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('assets/img/img-12.JPG')}}" alt="" class="gallery-item">
          </div>
          <div class="col-sm-3">
            <img src="{{asset('assets/img/img-1.jpg')}}" alt="" class="gallery-item">
          </div>
        </div>
      </div>
    </section>
    {{-- Akhir Image --}}

    {{-- Modals Image --}}
    <!-- Modal -->
    <div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Image Lab Meteorologi Penerbangan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="{{asset('assets/img/img-4.JPG')}}" alt="" class="modal-img">
          </div>
        </div>
      </div>
    </div>
    {{-- Akhir Modals Image --}}

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
            <div class="card shadow-lg p-2" style="width: 18rem;">
              <img src="{{asset('assets/img/Webinar-7.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
              <div class="card-body">
                <h5 class="card-title">PROGRAM STORIUM<br>STORY METEOROGICAL LABORATORY</h5>
                <p class="card-text">Tema 1 : TEKNOLOGI PRAKIRAAN CUACA BMKG</p>
                {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="card shadow-lg p-2" style="width: 18rem;">
              <img src="{{asset('assets/img/Webinar-8.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
              <div class="card-body">
                <h5 class="card-title">PROGRAM STORIUM<br>STORY METEOROGICAL LABORATORY</h5>
                <p class="card-text">Tema 2 : PERKEMBANGAN EL NINO DAN MUSIM HUJAN</p>                 
                {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="card shadow-lg p-2" style="width: 18rem;">
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
            <div class="card shadow-lg p-2" style="width: 18rem;">
              <img src="{{asset('assets/img/Webinar-1.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
              <div class="card-body">
                <h5 class="card-title">PROGRAM STORIUM, STORY METEOROGICAL LABORATORY</h5>
                <p class="card-text">Tema : Dampak Bentuk Garis Pantai Terhadap Curah Hujan Pesisir</p>
                {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="card shadow-lg p-2" style="width: 18rem;">
              <img src="{{asset('assets/img/Webinar-2.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
              <div class="card-body">
                <h5 class="card-title">WEBINAR<br>STORIUM<br>#5</h5>
                <p class="card-text">Tema : SIDARMA : Sistem Integrasi Radar Cuaca Mandiri BMKG</p>
                {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="card shadow-lg p-2" style="width: 18rem;">
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
            <div class="card shadow-lg p-2" style="width: 18rem;">
              <img src="{{asset('assets/img/Webinar-4.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
              <div class="card-body">
                <h5 class="card-title">DIBALIK BENCANA HIDROMETEOROLOGI DI WILAYAH INDONESIA, ADA APA?</h5>
                {{-- <p class="card-text"></p>                   --}}
                {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="card shadow-lg p-2" style="width: 18rem;">
              <img src="{{asset('assets/img/Webinar-5.jpeg')}}" class="card-img-top gallery-webinar" alt="...">
              <div class="card-body">
                <h5 class="card-title">WEBINAR NASIONAL</h5>
                <p class="card-text">Sumut Dilanda Cuaca Ekstrim?<br>Tantangan dan Strategi dalam menghadapinya</p>                  
                {{-- <a href="#" class="btn" style="background-color: #ff0000; color: white;">Lihat</a> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="card shadow-lg p-2" style="width: 18rem;">
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

    {{-- Contact --}}
    <section class="contact-us">
      <div class="container py-5">
        <div>
          <h2 class="text-center mb-5 shadow-sm p-3" style="color: #ff0000">Kontak Kami</h2>
        </div>
        <div class="row">
          <div class="col-md-7 shadow rounded p-5">
            <div class="row">
              <div class="col mb-3">
                <label class="form-label" for="firstName">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" id="firstName" required>
              </div>
              <div class="col mb-3">
                <label class="form-label" for="lastName">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" id="lastName" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" placeholder="Email Address" id="email" required>
            </div>
            <div class="mb-3">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" placeholder="Subject" id="subject" required>
            </div>
            <div class="mb-3">
              <label for="pesan">Message</label>
              <textarea name="pesan" id="pesan" rows="3" class="form-control" placeholder="Write Your Message Here" required></textarea>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn" style="background-color: #ff0000; color:white;">Kirim</button>
            </div>
          </div>
          <div class="col-md-5 bg-light p-4 ml-2 shadow-sm" style="display: flex; justify-content:center; align-items:center; border-radius:5px;">
            <div class="">
              <img src="{{asset('assets/img/img-8.JPG')}}" alt="" class="img-fluid" style="border-radius: 5px; ">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Akhir Contact --}}

    {{-- Footer --}}
    <footer class="bg-dark text-white pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #ff0000">Lab Meteorologi Penerbangan</h5>
            <p style="text-align: justify;">{!! $Banner1->content !!}</p>
          </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #ff0000">Informasi Cuaca Penerbangan</h5>
              <p>
                <a href="#weatherInformation" class="text-white" style="text-decoration: none">Humidity</a>
              </p>
              <p>
                <a href="#weatherInformation" class="text-white" style="text-decoration: none">Wind Speed</a>
              </p>
              <p>
                <a href="#weatherInformation" class="text-white" style="text-decoration: none">Temperature</a>
              </p>
              <p>
                <a href="#weatherInformation" class="text-white" style="text-decoration: none">Wind Direction</a>
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #ff0000">Tentang</h5>
              <p>
                <a href="#about" class="text-white" style="text-decoration: none">Tentang LAB</a>
              </p>
              <p>
                <a href="#gallery" class="text-white" style="text-decoration: none">Gambar</a>
              </p>
              <p>
                <a href="#webinar" class="text-white" style="text-decoration: none">Webinar</a>
              </p>
              <p>
                <a href="#weatherInformation" class="text-white" style="text-decoration: none">Informasi Cuaca Penerbangan</a>
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #ff0000">Contact</h5>
              <p>
                <i class="bi bi-house-door-fill"></i> STMKG, Tanah Tinggi, Tanggerang
              </p>
              <p>
                <i class="bi bi-envelope"></i> -- Not Now --
              </p>
              <p>
                <i class="bi bi-telephone"></i> -- Not Now --
              </p>
              <p>
                <i class="bi bi-instagram"></i> -- Not Now --
              </p>
          </div>
        </div>
  
        <hr class="mb-4">

        <div class="row align-items-center">
          <div class="col-md-7 col-lg-8">
            <p style="font-size: 14px;">@2024 Created By : 
              <strong><a href="https://www.instagram.com/arijehadun/" target="blank" style="text-decoration: none; color:#ff0000;">Marianus Carol Jehadun</a></strong>
            </p>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-right">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-envelope"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    {{-- Akhir Footer --}}

    {{-- Link Javascript --}}
    <script src="{{asset('assets/js/app.js')}}"></script>

    {{-- Javascript pengatur Image PopUp --}}
    <script type="text/javascript">

      // Untuk Pop Up Image
      document.addEventListener("click", function(e) {
        if(e.target.classList.contains("gallery-item")) {
          const src = e.target.getAttribute("src");
          document.querySelector(".modal-img").src = src;
          const myModal = new bootstrap.Modal(document.getElementById("gallery-popup"));
          myModal.show();
        }
      })

      // Untuk Pop Up Webinar
      document.addEventListener("click", function(el) {
        if(el.target.classList.contains("gallery-webinar")) {
          const srcnya = el.target.getAttribute("src");
          document.querySelector(".modal-webinar").src = srcnya;
          const myModalKu = new bootstrap.Modal(document.getElementById("webinar-popup"));
          myModalKu.show();
        }
      })

    </script>

    {{-- Box Icon --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- Link JS Pooper --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    {{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>