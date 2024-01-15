<?php
// Establish the database connection
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "moewcafe";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$nama_pelanggan = $_POST['nama_pelanggan'];
$jenis_kopi = $_POST['jenis_kopi'];
$harga_kopi = $_POST['harga_kopi'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$jenis_pembelian = $_POST['jenis_pembelian'];

$query = "INSERT INTO pemesanan (nama_pelanggan, jenis_kopi, harga_kopi, tanggal_pemesanan, jenis_pembelian) VALUES ('$nama_pelanggan', '$jenis_kopi', '$harga_kopi', '$tanggal_pemesanan', '$jenis_pembelian')";

$result = $koneksi->query($query);

if ($result) {
    header("Location: ..\landing_pages\index.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Close the database connection
$koneksi->close();
?>