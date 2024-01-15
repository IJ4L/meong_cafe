<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Jika registrasi berhasil, arahkan pengguna ke halaman login
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>