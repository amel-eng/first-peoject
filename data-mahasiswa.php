<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_kas");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM uangkas");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kas</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        h1 {
            background-color: #3b6fd6;
            color: white;
            padding: 20px 0;
        }
        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            padding: 10px;
            border: 1px solid #999;
        }
        th {
            background-color: #3b6fd6;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Data Kas Mahasiswa</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
            <th>Saldo Akhir</th>
            <th>Keterangan</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['No'] ?></td>
            <td><?= $row['Tanggal'] ?></td>
            <td><?= $row['Nama'] ?></td>
            <td><?= $row['Pemasukan'] ?></td>
            <td><?= $row['Pengeluaran'] ?></td>
            <td><?= $row['SaldoAkhir'] ?></td>
            <td><?= $row['Keterangan'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
