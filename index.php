<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
    <title>Final Project - Desa Sirnabaya</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warna fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo-kabupaten-karawang.png" alt="logo kabupaten" width="30" height="35" style="margin-right: 10px;"><span class="navbar-brand h1">Desa Sirnabaya</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile Desa
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="pages/profiledesa/content/keterangandesa.php">Tentang Desa</a></li>
                <li><a class="dropdown-item" href="pages/profiledesa/content/struktur.php">Struktur Organisasi</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pelayanan Desa
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="">Pengajuan Surat</a></li>
                <li><a class="dropdown-item" href="">Pengajuan Surat</a></li>
                <li><a class="dropdown-item" href="">Pengajuan Surat</a></li>
              </ul>
            </li>
            <li class="nav-item button-autentifikasi">
              <a class="nav-link fw-bold" href="login.php">Login</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- Homepage -->
  <section id="home">
    <div class="bg-img" style="background-image: url('background.jpeg');">
      <div class="judul d-flex justify-content-center align-items-center">
        <h3 class="sambutan">Selamat Datang Di Desa Sirnabaya</h3>        
      </div>
    </div>

    <div class="d-flex align-items-center tampilan" id="unggulan">
      <div class="container">
        <div class="d-flex justify-content-around text-center align-items-center flex-wrap">
          <div class="isi">
            <img src="icon/profile.png" height="50">
            <a href="pages/profiledesa/content/keterangandesa.php">Profile Desa</a>
          </div>
          <div class="isi">
            <img src="icon/pelayanan.png" height="50">
            <a href="pages/pelayanandesa.php">Pelayanan Desa</a>
          </div>
          <div class="isi">
            <img src="icon/diagram.png" height="50">
            <a href="pages/sensus.php">Sensus Kependudukan</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h4 style="margin-top: 20px; color: #427D9D;">Gallery Foto</h4>
      <div class="galleryfoto">
        <img src="images/photo1.jpeg">
        <img src="images/photo2.jpeg">
        <img src="images/photo3.jpeg">
        <img src="images/photo4.jpeg">
        <img src="images/photo5.jpeg">
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer style="background-color: #427D9D;" class="text-start text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 mt-4">
          <h5 style="font-weight: 700; color: #9BBEC8;" class="text-uppercase mb-4">Profile Desa</h5>
          <h6 style="font-weight: 500;" class="text-light">Desa Sirnabaya - Telukjambe Timur</h6>
          <h6 style="font-weight: 500;" class="text-light mb-4">Karawang - Jawa Barat</h6>
          <p class="text-light ">Aplikasi berbasis web dibangun bertujuan untuk memudahkan masyarakat dalam pendaftaran serta memudahkan staff untuk mengelola data kependudukan.</p>
        </div>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0 mt-4">
          <h5 style="font-weight: 700; color: #9BBEC8;" class="text-uppercase mb-4">Contact Us</h5>
          <p class="text-light">Jl. RAYA TELUKJAMBE - PANGKALAN NO. 1 KARAWANG</p>
          <p class="text-light">KODE POS 41360</p>
          <h5 style="font-weight: 700; color: #9BBEC8;">No HP:</h5>
          <p class="text-light">08123456789</p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>