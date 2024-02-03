<?php
// Informasi koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "restoran"; // Nama database yang ingin digunakan

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika koneksi berhasil
// echo "Koneksi berhasil";

// Jangan lupa untuk menutup koneksi setelah selesai menggunakan database
// mysqli_close($conn);
?>
