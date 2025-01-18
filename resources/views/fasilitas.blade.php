<x-layout>
    <div class="title" style="padding: 1px;">
        <h1 class="text-center">FASILITAS KAMPUS</h1>
        <p class="text-center">
            Beberapa Fasilitas Yang Ada di STT Cipasung
        </p>
    <div class="container ekstrakulikuler" style="background-color:rgb(250, 251, 250); padding: 0px; border-radius: 50px;">
        <a href="{{ url('/Aula') }}" class="perEkstrakulikuler">
        <img src="{{ asset('images/fasilitas/aula.jpg') }}" alt="Aula">
            <p>Aula</p>
        </a>

        <a href="{{ url('/kelas') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/kelas.jpg') }}" alt="kelas" />
            <p>Kelas</p>
        </a>

        <a href="{{ url('/kantin') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/kantin.jpg') }}" alt="kantin" />
            <p>Kantin</p>
        </a>

        <a href="{{ url('/asrama') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/asrama.jpeg') }}" alt="asrama" />
            <p>Asrama</p>
        </a>

        <a href="{{ url('/lapangan') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/lapang.jpeg') }}" alt="lapangan" />
            <p>Lapangan</p>
        </a>

        <a href="{{ url('/mesjid') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/masjid.jpg') }}" alt="mesjid" />
            <p>Mesjid</p>
        </a>

        <a href="{{ url('/perpustakaan') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/perpus.jpg') }}" alt="perpustakaan" />
            <p>Perpustakaan</p>
        </a>

        <a href="{{ url('/praktekTI') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/industri.jpeg') }}" alt="praktekTI" />
            <p>Ruang Praktek TI</p>
        </a>

        <a href="{{ url('/laboratoriumK') }}" class="perEkstrakulikuler">
            <img src="{{ asset('images/fasilitas/labkom.jpg') }}" alt="LaboratoriumK" />
            <p>Laboratorium Komputer</p>
        </a>
    </div>
    </div>
</x-layout>
