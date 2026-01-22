<?php
session_start();
$conn = new mysqli("localhost", "root", "", "db_kas");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query ke database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login berhasil
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Redirect ke halaman utama
    exit;
} else {
    // Gagal login
    echo "<script>
            alert('Username atau password salah!');
            window.location.href = 'login.php';
          </script>";
}

$conn->close();
?>
