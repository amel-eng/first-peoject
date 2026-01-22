<?php 
	include 'db.php';
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }

        .header {
            background-color: #3b6fd6;
            color: white;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
        }

        .menu-container {
            margin-top: 100px;
        }

        .menu-button {
            background-color: #3b6fd6;
            color: white;
            padding: 40px;
            width: 60%;
            margin: 30px auto;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            display: block;
        }

        .menu-button:hover {
            background-color: #2d59b3;
        }
    </style>
</head>
<body>
    <div class="header">SISTEM INFORMASI KAS MAHASISWA</div>

    <div class="menu-container">
        <button class="menu-button" onclick="window.location.href='mahasiswa.php'">MAHASISWA</button>
        <button class="menu-button" onclick="window.location.href='kas.php'">KAS</button>
    </div>
</body>
</html>
