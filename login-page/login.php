<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Gunakan prepared statement untuk mencegah SQL injection
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["user_id"] = $row["user_id"];
            header("Location: ../admin-page/admin-page.php");
            exit();
        } else {
            echo '<script>alert("Wrong password");</script>';
        }
    } else {
        echo '<script>alert("Email not found");</script>';
        header("Location: ../admin-page/admin-page.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>