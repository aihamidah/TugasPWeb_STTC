<x-layout>
    <div class="container mt-5">
      <!-- Gambar Aula -->
      <div class="text-center mb-4">
        <img src="{{ asset('images/fasilitas/aula.jpg') }}" alt="Aula" class="img-fluid rounded">
      </div>

      <!-- Deskripsi Aula -->
      <div class="text-center">
        <h2 class="mb-3">Aula Utama Kampus</h2>
        <p>
          Aula utama kampus STT Cipasung digunakan untuk berbagai kegiatan, seperti seminar, pertemuan, dan acara lainnya.
          Dengan kapasitas yang besar, aula ini dapat menampung hingga 500 orang. Lokasinya berada di Gedung Serba Guna, Lantai 2.
          Aula ini dilengkapi dengan fasilitas audio visual yang modern dan ruang yang nyaman untuk mendukung berbagai kegiatan kampus.
        </p>

        <!-- Tombol Kembali -->
        <div class="mt-4">
          <button class="btn btn-secondary" onclick="history.back()">Kembali</button>
        </div>
      </div>

      <section id="programs" class="mb-4">
        <div class="container">
          <h2 class="text-center mb-4"></h2>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="images/fasilitas/aula1.jpeg" class="card-img-top img-fluid h-100" alt="foto aula" />
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="images/fasilitas/aula2.jpeg" class="card-img-top img-fluid h-100" alt="foto aula" />
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="images/fasilitas/aula3.jpg" class="card-img-top img-fluid h-100" alt="foto aula" />
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </x-layout>
