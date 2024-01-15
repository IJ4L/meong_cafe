<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "moewcafe";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['update_nama']) && isset($_POST['id_pemesanan'])) {
    $id_pemesanan = $_POST['id_pemesanan'];
    $nama_pelanggan_baru = $_POST['nama_pelanggan_baru'];

    // Implement proper validation and security checks
    $conn->query("UPDATE pemesanan SET nama_pelanggan='$nama_pelanggan_baru' WHERE id_pemesanan = $id_pemesanan");
}

header("Location: admin-page.php");
$conn->close();

exit();

?>