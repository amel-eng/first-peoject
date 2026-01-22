<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$conf_password = $_POST['conf_password'];

if ($password !== $conf_password) {
    echo "<script>alert('Password dan konfirmasi tidak sama!'); window.history.back();</script>";
    exit;
}

// Hash password sebelum disimpan (lebih aman)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO tbl_login (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registrasi berhasil!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
