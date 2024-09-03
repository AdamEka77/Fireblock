<?php
// Konfigurasi database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = "";     // Ganti dengan password database Anda
$dbname = "hit_counter_db"; // Ganti dengan nama database Anda

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Nama halaman yang diakses
$page = basename($_SERVER['PHP_SELF']);

// Menggunakan prepared statement untuk SELECT
$stmt = $conn->prepare("SELECT count FROM hits WHERE page = ?");
$stmt->bind_param("s", $page);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($count);

if ($stmt->num_rows > 0) {
    $stmt->fetch();
    $count += 1;
    $stmt->close();

    // Menggunakan prepared statement untuk UPDATE
    $stmt = $conn->prepare("UPDATE hits SET count = ? WHERE page = ?");
    $stmt->bind_param("is", $count, $page);
    $stmt->execute();
    $stmt->close();
} else {
    $count = 1;
    $stmt->close();

    // Menggunakan prepared statement untuk INSERT
    $stmt = $conn->prepare("INSERT INTO hits (page, count) VALUES (?, ?)");
    $stmt->bind_param("si", $page, $count);
    $stmt->execute();
    $stmt->close();
}

echo $count;

// Tutup koneksi
$conn->close();
?>
