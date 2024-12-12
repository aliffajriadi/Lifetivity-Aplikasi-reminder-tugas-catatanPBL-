<?php
include '../koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $is_guru = $_POST['tipe_akun'] === "teacher" ? 1 : 0;

    $sql = "INSERT INTO users (username, password, email, is_guru) VALUES ('$username','$password', '$email','$is_guru')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
        header("Location: ../../login");
    } else {
        echo "Error: " . $conn->error;
        header("Location: ../../daftar");
    }
}

?>