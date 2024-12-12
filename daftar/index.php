<?php 
    session_start();

    if(isset($_SESSION['username'])) {
        header('Location: ../dashboard');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMb0RZ4lfoPim8bLqGgPZimj5CfopBz7vF5y9zW" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to bottom left, rgb(171, 217, 255), white);
        }

        .kiri {
            align-content: center;
            margin-left: 20px;
        }

        .kanan {
            align-content: center;
        }

        @media (max-width: 600px) {
            .kanan {
                display: none;
            }

            .kiri {
                width: auto;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container text-center">
            <div class="row justify-content-around g-4">

                <div class="col-4 kiri">
                    <div class="login-container border p-4 rounded shadow-sm">
                        <h2 class="text-center mb-4">Daftar</h2>
                        <form action="../config/user/regis-service.php" method="POST">
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Nama Anda" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                                    <select class="form-select" name="tipe_akun" id="accountType" required>
                                        <option value="" disabled selected>Pilih Kategori Akun</option>
                                        <option value="teacher">Guru</option>
                                        <option value="student">Murid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Konfirmasi password" required>
                                </div>
                            </div>
                            <div class="mb-3 form-check text-start">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Saya setuju dengan ketentuan yg ada</label>
                            </div>
                            <button type="submit" name="register" class="btn btn-primary w-100"><i class="fas fa-sign-in-alt"></i>
                                Simpan</button>
                        </form>

                        <p class="text-center mt-2">Sudah punya akun? <br><a href="../login/" class="link-primary">Login Disini</a>
                        </p>
                    </div>
                </div>
                <div class="col-7 align-items-center kanan">
                    <h2>Selamat Datang, di Aplikasi <b class="text-primary">Livetifity</b></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla alias corporis quia sit quam consequuntur dolore, quis magni soluta officia voluptatibus vitae modi, vero reiciendis necessitatibus laborum deleniti consectetur veniam!
                        Ratione aspernatur expedita fuga commodi. Debitis voluptatem vitae eum. Laudantium nostrum repellendus, ipsam quasi nesciunt.</p>
                    <button type="button" class="btn btn-primary">Jelajahi</button>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>