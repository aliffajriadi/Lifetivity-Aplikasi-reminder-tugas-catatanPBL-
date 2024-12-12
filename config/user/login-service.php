<?php
include '../koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT id, username, password FROM users WHERE username = ? AND password = ?");

    $query->bind_param("ss", $username, $password);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['id_user'] = $row['id'];
        header("Location: ../../dashboard/"); //PINDAHI  KE DASHBOARD DISINI//
        exit();

    } else {

        echo "<script>
        alert('Username atau password salah!'); 
        window.location.href = '../../login/';
        </script>";
    }
}
?>
