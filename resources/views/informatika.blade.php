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

    <title>Informatika</title>
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
          <img src="images/logosttc.png" alt="STT Cipasung" />
          <h1>STT CIPASUNG<br />High Education for All</h1>
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
            </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control sm-2" type="search" placeholder="Cari" aria-label="Search"/>

            <button class="btn btn-success sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container titleArtikel">
      <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
          <section class="video-container">
            <h2>Profil Informatika</h2>
            <iframe src="https://www.youtube.com/embed/zV9LbxGakAI" allowfullscreen></iframe>
          </section>
        </li>
      </ul>
    </div>


    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12" style="padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
          <p style="text-align: justify; color: #333; font-size: 16px; line-height: 1.6;">
            Jurusan Informatika di Sekolah Tinggi Teknologi (STT) Cipasung dirancang
                untuk mencetak generasi profesional yang kompeten dalam bidang teknologi informasi
                dan komunikasi. Dengan kurikulum berbasis teknologi terkini, jurusan ini fokus
                pada pengembangan keahlian di bidang pemrograman, rekayasa perangkat lunak,
                analisis data, jaringan komputer, dan pengembangan aplikasi berbasis web serta mobile.

                Kami mengedepankan pendekatan praktis melalui laboratorium berteknologi tinggi,
                proyek kolaboratif, dan bimbingan dari dosen berpengalaman. Selain itu, jurusan
                Informatika STT Cipasung juga mendukung pengembangan soft skills seperti berpikir
                kritis, kreativitas, dan manajemen proyek untuk mempersiapkan lulusan yang siap bersaing
                di era Revolusi Industri 4.0.

                Bergabunglah dengan kami untuk menjadi inovator teknologi masa depan!

          </p>
        </div>
      </div>
    </div>

@include('components.footer')

    {{-- <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h4 class="my-4 text-white text-center">Contact Us</h4>

            <div class="footerContactUs">
              <div class="perFooterContactUs">
                <i class="fas text-white fa-envelope"></i>
                <p class="text-white">admin@sttcipasung.ac.id</p>
              </div>

              <div class="perFooterContactUs">
                <i class="fas text-white fa-phone-alt"></i>
                <p class="text-white">08111121212</p>
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
              <a href="" class="text-white">Fasilitas</a>
              <a href="" class="text-white">Galeri</a>
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
        <i class="far fa-copyright"></i>2024 By :
        <span>ARKOM Group</span>.&nbsp; Inspired by
        <a href="https://sttcipasung.ac.id/">STT Cipasung</a>
      </p>
    </div>

    <script src="js/script.js"></script>
  </body>
</html> --}}
