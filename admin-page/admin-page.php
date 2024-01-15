<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page - Pemesanan</title>
</head>

<body>
    <h2>Data Pemesanan</h2>

    <?php

    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "moewcafe";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM pemesanan");

    if ($result->num_rows > 0) {
        ?>
        <table>
            <tr>
                <th>ID Pemesanan</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kopi</th>
                <th>Harga Kopi</th>
                <th>Tanggal Pemesanan</th>
                <th>Jenis Pembelian</th>
                <th>Action</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id_pemesanan'] . "</td>";
                echo "<td>" . $row['nama_pelanggan'] . "</td>";
                echo "<td>" . $row['jenis_kopi'] . "</td>";
                echo "<td>" . $row['harga_kopi'] . "</td>";
                echo "<td>" . $row['tanggal_pemesanan'] . "</td>";
                echo "<td>" . $row['jenis_pembelian'] . "</td>";
                echo "<td>";
                echo "<form action='delete.php' method='delete'>";
                echo "<input type='hidden' name='id' value='" . $row['id_pemesanan'] . "'>";
                echo "<button type='submit' name='complete_order'>Complete Order</button>";
                echo "</form>";

                echo "<form action='update_nama_pelanggan.php' method='post'>";
                echo "<input type='hidden' name='id_pemesanan' value='" . $row['id_pemesanan'] . "'>";
                echo "<input type='text' name='nama_pelanggan_baru' placeholder='Update Nama Pelanggan'>";
                echo "<button type='submit' name='update_nama'>Update Nama</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <?php
    } else {
        echo "Tidak ada data pemesanan.";
    }

    // Close the connection after using it
    $conn->close();
    ?>

</body>

</html>