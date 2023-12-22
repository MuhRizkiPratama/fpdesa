<?php

// Koneksi ke database
require "../config/db.php";
// Ambil data dari tabel
$result = mysqli_query($db, "SELECT * FROM tbl_m_ktp");

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Data Kependudukan</title>
</head>
<body>
    <!-- Header Start-->
    <h1 class="text-center text-light bg-warna mb-5 p-2">Admin</h1>
    <!-- Header End -->

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center mt-3">Data Masyakarat</h2>
            </div>
            <div class="card-body">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah Data
                </button>

                <!-- Table Start -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th class="bg-primary text-light">No:</th>
                                <th class="bg-primary text-light">Nik</th>
                                <th class="bg-primary text-light">Photo</th>
                                <th class="bg-primary text-light">Nama</th>
                                <th class="bg-primary text-light">Jenis Kelamin</th>
                                <th class="bg-primary text-light">Golongan Darah</th>
                                <th class="bg-primary text-light">Tempat Lahir</th>
                                <th class="bg-primary text-light">Tanggal Lahir</th>
                                <th class="bg-primary text-light">Umur</th>
                                <th class="bg-primary text-light">Pendidikan</th>
                                <th class="bg-primary text-light">Status Kawin</th>
                                <th class="bg-primary text-light">Agama</th>
                                <th class="bg-primary text-light">Pekerjaan</th>
                                <th class="bg-primary text-light">Alamat</th>
                                <th class="bg-primary text-light">Aksi</th>
                            </tr>
                        </thead>
                        <!-- // Ambil data (fetch) dari object result -->
                        <?php while ($row = mysqli_fetch_assoc($result)){?>
                        <tbody class="text-center">
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['nik_tmk'];?></td>
                                <td><?= $row['photo_tmk'];?></td>
                                <td><?= $row['nama_tmk'];?></td>
                                <td><?= $row['jk_tmk'];?></td>
                                <td><?= $row['golongan_darah_tmk'];?></td>
                                <td><?= $row['tempat_lahir_tmk'];?></td>
                                <td><?= $row['tanggal_lahir_tmk'];?></td>
                                <td><?= $row['umur_tmk'];?></td>
                                <td><?= $row['pendidikan_tmk'];?></td>
                                <td><?= $row['status_kawin_tmk'];?></td>
                                <td><?= $row['agama_tmk'];?></td>
                                <td><?= $row['pekerjaan_tmk'];?></td>
                                <td><?= $row['alamat_tmk'];?></td>
                                <td>
                                    <a class="btn btn-success btn-sm mb-1" href="../backend/edit.php?id=<?= $row['id_tmk']?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                    <a class="btn btn-danger btn-sm mb-1" href="../backend/delete.php?id=<?= $row['id_tmk']?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                </td>
                            </tr>
                            
                        </tbody>
                        <?php };?>
                    </table>
                </div>
                <!-- Table End -->

                <!-- Modal Start-->
                <div class="modal fade modal-lg" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Masyarakat</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="../backend/create.php" method="POST">
                                <div class="modal-body">
                                        <div class="col-12 mb-3">
                                            <label for="id" class="form-label">ID :</label>
                                            <input type="number" name="id" class="form-control" id="id">
                                        </div>
                            
                                        <div class="col-12 mb-3">
                                            <label for="nik" class="form-label">Nik :</label>
                                            <input type="number" name="nik" class="form-control" id="nik">
                                        </div>
                            
                                        <div class="col-12 mb-3">
                                            <label for="nama" class="form-label">Nama :</label>
                                            <input type="text" name="nama" class="form-control" id="nama">
                                        </div>
                            
                                        <label>Jenis Kelamin :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jeniskelamin" id="laki-laki" value="laki-laki">
                                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="jeniskelamin" id="perempuan" value="perempuan">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                            
                                        <label>Golongan Darah :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="golongandarah" id="O" value="O">
                                            <label class="form-check-label" for="O">O</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="golongandarah" id="A" value="A">
                                            <label class="form-check-label" for="A">A</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="golongandarah" id="B" value="B">
                                            <label class="form-check-label" for="B">B</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="golongandarah" id="AB" value="AB">
                                            <label class="form-check-label" for="AB">AB</label>
                                        </div>
                            
                                        <div class="col-12 mb-3">
                                            <label for="tempatlahir" class="form-label">Tempat Lahir :</label>
                                            <input type="text" name="tempatlahir" class="form-control" id="tempatlahir">
                                        </div>
                            
                                        <div class="col-12 mb-3">
                                            <label for="tanggallahir" class="form-label">Tanggal Lahir :</label>
                                            <input type="date" name="tanggallahir"class="form-control" id="tanggallahir">
                                        </div>
                            
                                        <div class="col-12 mb-3">
                                            <label for="umur" class="form-label">Umur :</label>
                                            <input type="number" name="umur" class="form-control" id="umur">
                                        </div>
                            
                                        <label>Pendidikan :</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="pendidikan" id="pelajar" value="laki-laki">
                                            <label class="form-check-label" for="pelajar">Pelajar</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="pendidikan" id="mahasiswa" value="mahasiswa">
                                            <label class="form-check-label" for="mahasiswa">Mahasiswa</label>
                                        </div>
                            
                                        <div class="col-12 mb-3">
                                            <label for="alamat" class="form-label">Alamat:</label>
                                            <input type="text" name="alamat" class="form-control" id="Alamat">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit" >Simpan Data</button>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
                <!-- Modal End -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>