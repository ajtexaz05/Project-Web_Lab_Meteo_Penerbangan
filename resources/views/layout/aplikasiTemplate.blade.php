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

    {{-- Main Navbar --}}
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand nav-link" href="/">LAB. <span>METEO PENERBANGAN</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dataTentang">Tentang</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#weatherInformation">Informasi Cuaca</a>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#weatherInformation" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi Cuaca
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dataPeta">Peta Cuaca Lengkap</a></li>
              </ul>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#gallery">Gambar</a>
            </li> --}}
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

    {{-- Isi Kontennya dari luar --}}
    @yield('konten')

    {{-- Footer --}}
    <footer class="bg-dark text-white pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold" style="color: #ff0000">Lab Meteorologi Penerbangan</h5>
            <p style="text-align: justify;">Ini merupakan Website Lab Meteorologi Penerbangan yang bertujuan untuk memberikan data data meteorologi 
                penerbangan dan data informasi cuaca harian kampus STMKG sebagai bentuk media pembelajaran Taruna/i 
                terutama Program Studi  Diploma IV Meteorologi sehingga nantinya menjadi lulusan yang ahli di bidangnya 
                dan dapat memberikan informasi cuaca sebagai bentuk pelayanan kepada masyarakat</p>
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