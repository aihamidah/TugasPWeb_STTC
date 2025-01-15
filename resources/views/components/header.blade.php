    <nav class="navbar navbar-expand-lg navbar-light navbarKu fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logosttc.png" alt="STT Cipasung" />
          <h1>STT CIPASUNG<br />High Education for All</h1>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">

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
                        <a class="dropdown-item" href="{{ url('/DataAkademik') }}">Data Akademik</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/contact') }}">Contact Us</a>
                        <div class="dropdown-divider"></div>
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

