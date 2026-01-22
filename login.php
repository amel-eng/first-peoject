<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Opsional, jika mau pakai gambar background */
            background-size: cover;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.95);
            width: 350px;
            padding: 30px;
            margin: 100px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
        }
        .btn-group {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        input[type="submit"],
        input[type="button"] {
            width: 48%;
            padding: 10px;
            background-color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #eee;
        }
        .register-link {
            margin-top: 15px;
            text-align: center;
            display: block;
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="proses-login.php" method="POST">
            <label for="username">USERNAME</label>
            <input type="text" name="username" required>

            <label for="password">PASSWORD</label>
            <input type="password" name="password" required>

            <div class="btn-group">
                <input type="submit" value="Login">
                <input type="button" value="Register" onclick="window.location.href='register.php';">
            </div>
        </form>
        <a class="register-link" href="register.php">Belum register? Klik di sini</a>
    </div>
</body>
</html>
