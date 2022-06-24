<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelayanan SIM Online</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

    

    

<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
    .button-40 {
      background-color: #111827;
      border: 1px solid transparent;
      border-radius: .75rem;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      flex: 0 0 auto;
      font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
      font-size: 1.125rem;
      font-weight: 600;
      line-height: 1.5rem;
      padding: .75rem 1.2rem;
      text-align: center;
      text-decoration: none #6B7280 solid;
      text-decoration-thickness: auto;
      transition-duration: .2s;
      transition-property: background-color,border-color,color,fill,stroke;
      transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: auto;
    }

    .button-40:hover {
      background-color: #374151;
    }

    .button-40:focus {
      box-shadow: none;
      outline: 2px solid transparent;
      outline-offset: 2px;
    }

    @media (min-width: 768px) {
      .button-40 {
        padding: .75rem 1.5rem;
      }
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('front/navbar-top-fixed.css')}}" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pelayanan SIM Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<main class="container">
    <h1>Silahkan Pilih Jenis Layanan Yang Dibutuhkan</h1>
    <a href="/pendaftaran">
    <button class="button-40" role="button">Pendaftaran SIM Baru</button>
    </a>
    <p></p>
    <a href="/perpanjang">
    <button class="button-40" role="button">Perpanjang SIM</button>
    </a>
    <p></p>
    <a href="/inputnilai">
    <button class="button-40" role="button">Input Nilai Ujian Tulis Dan Ujian Praktek</button>
    </a>
    <p></p>
    <a href="/cekhasil">
    <button class="button-40" role="button">Cek Hasil Kelulusan</button>
    </a>
    <p></p>
    <a href="/pengambilan">
    <button class="button-40" role="button">Lokasi Pengambilan SIM</button>
    </a>



    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>

      
  </body>
</html>
