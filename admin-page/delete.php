<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "moewcafe";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id_pemesanan = $_GET['id'];

    // Validate if the ID is numeric
    if (!is_numeric($id_pemesanan)) {
        die("Invalid ID");
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM pemesanan WHERE id_pemesanan = ?");
    $stmt->bind_param("i", $id_pemesanan);

    // Execute the prepared statement
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Order deleted successfully.";
        } else {
            echo "No rows deleted. Perhaps the order with ID $id_pemesanan doesn't exist.";
        }
    } else {
        echo "Error executing the delete query: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

$conn->close();
header("Location: admin-page.php");
?>