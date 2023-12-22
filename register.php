<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="card card-register">
                    <div class="card-header logo-login d-flex justify-content-center p-3">
                        <img style="margin-right: 10px;" src="images/logo-kabupaten-karawang.png" width="30" height="35" alt="logo kabupaten karawanng">
                        <h3>Desa Sirnabaya</h3>
                    </div>
                    <div class="card-body">
                        <h4 style="display: flex; justify-content: center; color: #427D9D;">Register</h4>

                    <form action="backend/register.php" method="POST">
                        <div class="col-12 p-1">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_tu" class="form-control" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="col-12 p-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email_tu" class="form-control" placeholder="Masukan Email">
                        </div>
                        <div class="col-12 p-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password_tu" class="form-control" placeholder="Masukan Password">
                        </div>
                        <div class="col-12 p-1">
                            <label for="confirm" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="confirm_tu" class="form-control" placeholder="Konfirmasi Password">
                        </div>
        
                        <div class="col-12 p-1">
                            <button class="btn btn-primary w-100" style="margin-top: 15px; margin-bottom: 15px; background-color: #427D9D;" name="submit" type="submit">Register</button>
                        </div>
                    </form>
                        
                        <div class="col-12 link-logdaf p-1">
                            <p class="text-center">Sudah Mempunyai Akun? <a href="login.php">Silahkan Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-img-logdaf" style="background-image: url('background2.jpeg');"></div>
</body>
</html>