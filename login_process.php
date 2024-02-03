<?php
// Menggunakan koneksi ke database dari file koneksi.php
require_once 'koneksi.php';

// Memulai session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari form index
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query SQL untuk memeriksa apakah username dan password cocok
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Jika data ditemukan, buat session dan arahkan ke dashboard.php
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    } else {
        // Jika data tidak ditemukan, arahkan ke index.php
        header("location: index.php");
    }
} else {
    // Jika halaman diakses langsung tanpa melalui form index, arahkan ke index.php
    header("location: index.php");
}
?>
