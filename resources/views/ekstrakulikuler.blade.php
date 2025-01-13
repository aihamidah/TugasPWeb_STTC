<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <title>STT Cipasung</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/sttc.png" type="image/x-icon" />

    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- boot -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <!-- lightslider -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"
      integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"
      integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbarKu fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/sttc.png" alt="Logo STT Cipasung" />
          <h1>STT CIPASUNG<br />High Education For All</h1>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/profile') }}">Profil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                        </li>
                    </ul>
                </div>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="{{ url('/ekstrakulikuler') }}">Unit Kegiatan Mahasiswa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#contact">Contact Us</a>
                    </div>
                </li>
    </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control sm-2"
              type="search"
              placeholder="Cari"
              aria-label="Search"
            />

            <button class="btn btn-success sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="title">
      <h1 class="text-center">UNIT KEGIATAN MAHASISWA</h1>
      <p class="text-center">
        Beberapa Unit Kegiatan Mahasiswa Yang Ada di STT Cipasung
      </p>
    </div>

      <div class="container ekstrakulikuler">
        {{-- <a href="ukm/kelapa.html" class="perEkstrakulikuler"> --}}
        <a href ="{{url('/kelapa') }}" class="perEkstrakulikuler">
        {{-- <a class="nav-link" href="{{ url('/kelapa') }}"></a> --}}
          <img src="images/ukm/kelapa.png" alt="KELAPA" />
          <p>KELAPA</p>
        </a>

        <a href ="{{url('/kerohanian') }}" class="perEkstrakulikuler">
          <img src="images/ukm/kerohanian.png" alt="Kerohanian" />
          <p>Kerohanian</p>
        </a>

        <a href ="{{url('/olahraga') }}" class="perEkstrakulikuler">
          <img src="images/ukm/olahraga.png" alt="Olahraga" />
          <p>Olahraga</p>
        </a>

        <a href ="{{url('/silat') }}" class="perEkstrakulikuler">
          <img src="images/ukm/silat.png" alt="silat" />
          <p>Pencak Silat</p>
        </a>

        <a href ="{{url('/sanggar') }}" class="perEkstrakulikuler">
          <img src="images/ukm/sanggar.png" alt="Sanggar" />
          <p>Sanggar</p>
        </a>

        <a href ="{{url('/dignity') }}" class="perEkstrakulikuler">
          <img src="images/ukm/dignity.png" alt="Dignity" />
          <p>Dignity</p>
        </a>

        <a href ="{{url('/proclub') }}" class="perEkstrakulikuler">
          <img src="images/ukm/proclub.png" alt="ProClub" />
          <p>ProClub</p>
        </a>

        <a href ="{{url('/rilis') }}" class="perEkstrakulikuler">
          <img src="images/ukm/rilis.png" alt="Rilis" />
          <p>Rilis</p>
        </a>

        <a href ="{{url('/kdd') }}" class="perEkstrakulikuler">
          <img src="images/ukm/kdd.png" alt="KDD" />
          <p>KDD</p>
        </a>
      </div>

    </div>


    @include('components.footer')

    {{-- <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <section id="contact" class="contact">
            <h4 class="my-4 text-white text-center">Contact Us</h4>

            <div class="footerContactUs">
              <div class="perFooterContactUs">
                <i class="fas text-white fa-envelope"></i>
                <p class="text-white">admin@sttcipasung.ac.id</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-phone-alt"></i>
                <p class="text-white">023423434234</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-road"></i>
                <p class="text-white">
                  Jl. Cisinga No.KM1, Cilampunghilir, Kec. Padakembang,
                  Kabupaten Tasikmalaya, Jawa Barat 46466
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <h4 class="my-4 text-center text-white">About</h4>
            <div class="footerAbout">
              <a href="" class="text-white">Artikel</a>
              <a href="" class="text-white">Profil</a>
              <a href="" class="text-white">Contact Us</a>
              <a href="" class="text-white">Ekstrakulikuler</a>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <h4 class="my-4 text-white">Newsletter</h4>
            <form>
              <div class="form-group">
                <input
                  class="form-control"
                  type="search"
                  placeholder="Example@gmail.com"
                  aria-label="Search"
                />
                <button class="btn btn-success btn-newsletter" type="submit">
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footerCopyright">
      <p class="text-white">
        <i class="far fa-copyright"></i>2024 By : <span>ARKOM</span>.&nbsp;
        Inspired by <a href="https://sttcipasung.ac.id/">STT Cipasung</a>
      </p>
    </div> --}}
  </body>
</html>
