<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="../../../css/style.css"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
    <title>Final Project - Desa Sirnabaya</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warna fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../../../images/logo-kabupaten-karawang.png" alt="logo kabupaten" width="30" height="35" style="margin-right: 10px;"><span class="navbar-brand h1">Desa Sirnabaya</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../../index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile Desa
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../content/keterangandesa.php">Tentang Desa</a></li>
                <li><a class="dropdown-item" href="../content/struktur.php">Struktur Organisasi</a></li>
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
              <a class="nav-link fw-bold" href="../../../login.php">Login</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>