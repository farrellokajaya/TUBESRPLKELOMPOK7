<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>INPUT NILAI | PELAYANAN SIM ONLINE </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      body {
        background-color: lightgoldenrodyellow;
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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('form-validation.css')}}" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Input Nilai Ujian Tulis Dan Ujian Praktek </h2>
    </div>
    <div class="col-md-7 col-lg-8">
    <form  action="/inputnilai" method="post">
      @csrf
      <div class="form-group">
            <label for="Nilai_Ujian_Tulis">Nilai Ujian Tulis</label>
            <input type="text" class="form-control" name="Nilai_Ujian_Tulis" id="Nilai_Ujian_Tulis" placeholder="Masukan NIlai Ujian Tulis Anda">
          </div>
          <div class="form-group">
            <label for="Nilai_Ujian_Praktek">Nilai Ujian Praktek</label>
            <input type="text" class="form-control" name="Nilai_Ujian_Praktek" id="Nilai_Ujian_Praktek" placeholder="Masukan NIlai Ujian Praktek Anda">
          </div>
          <a href="/hasilkelulusan5">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Cek Hasil Kelulusan</button>
          </a>
      </form>
      </div>
    </div>
  </main>
</div>


    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <script src="{{asset('front/js/form-validation.js')}}"></script>
  </body>
</html>
