<x-layout>
      <br><br><br>
      <navbar-if>
        <div class="d-flex flex-column align-items-center text-center w-100">
            <h2 class="m-0">INFORMATIKA</h2>
            <p>Sekolah Tinggi Teknologi Cipasung</p>
        </div>
        <ul class="d-flex justify-content-center list-unstyled mt-2 mx-0 mb-0">
            <li class="mx-3">
                <a href="#about" class="text-white text-decoration-none">Tentang</a>
            </li>
            <li class="mx-3">
                <a href="#programs" class="text-white text-decoration-none">Himpunan</a>
            </li>
            <li class="mx-3">
                <a href="#news" class="text-white text-decoration-none">Dokumentasi</a>
            </li>
        </ul>
    </navbar-if>
    

    <!-- Hero Section -->
    <main class="container-lg m-auto p-20 bg-white mb-4">
      <!-- About Section -->
      <section id="about" class="mb-4">
        <div>
          <div
            class="row align-items-center justify-content-center text-center"
          >
            <div class="col-lg-6">
              <h2 class="display-4">Tentang Jurusan</h2>
              <p class="lead">
                lorem QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW
                <br />
                dusgghshsjkdsfsdfddhfdshihsihsi
              </p>
            </div>
            <div class="col-lg-6">
              <img
                src="img/"
                alt="Informatika"
                class="img-fluid"
              />
            </div>
            <div class="my-4">
              <button
                type="button"
                class="btn btn-outline-primary"
                onclick="document.getElementById('programs').scrollIntoView({behavior: 'smooth'});"
              >
                Pelajari Lebih Lanjut
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Programs Section -->
      <section id="programs" class="mb-4">
        <div class="container">
          <h2 class="text-center mb-4">Himpunan</h2>
          <div class="row justify-content-center">
            <!-- Teknik Informatika -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="assets/img/teknik-informatika.jpg"
                  class="card-img-top"
                  alt="Teknik Informatika"
                />
                <div class="card-body">
                  <h5 class="card-title">Teknik Informatika</h5>
                  <p class="card-text">
                    Program yang fokus pada pengembangan perangkat lunak,
                    pemrograman, kecerdasan buatan, dan teknologi jaringan untuk
                    mendukung inovasi di era digital.
                  </p>
                  <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
              </div>
            </div>
            <!-- Sistem Informasi -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="assets/img/sistem-informasi.jpg"
                  class="card-img-top"
                  alt="Sistem Informasi"
                />
                <div class="card-body">
                  <h5 class="card-title">Sistem Informasi</h5>
                  <p class="card-text">
                    Menggabungkan teknologi informasi dengan manajemen bisnis
                    untuk menciptakan solusi berbasis sistem yang efisien dan
                    efektif dalam pengelolaan data.
                  </p>
                  <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
              </div>
            </div>
            <!-- Manajemen -->
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img
                  src="assets/img/manajemen.jpg"
                  class="card-img-top"
                  alt="Manajemen"
                />
                <div class="card-body">
                  <h5 class="card-title">Manajemen</h5>
                  <p class="card-text">
                    Membekali mahasiswa dengan kemampuan kepemimpinan, strategi
                    bisnis, dan pengelolaan sumber daya untuk menghadapi
                    tantangan dunia usaha modern.
                  </p>
                  <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
    </main>


  </x-layout>