<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }
        .container {
            background-color:rgb(29, 66, 218);
            width: 400px;
            padding: 30px;
            margin: 100px auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            color: black;
        }
        label {
            display: block;
            margin-top: 10px;
            color: rgb(9, 7, 69);
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
            color: rgb(54, 40, 176);
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="proses-register.php" method="POST">
            <label for="id">ID</label>
            <input type="text" name="id" required>

            <label for="username">USERNAME</label>
            <input type="text" name="username" required>

            <label for="password">PASSWORD</label>
            <input type="password" name="password" required>

            <label for="conf_password">CONFIRM PASSWORD</label>
            <input type="password" name="conf_password" required>

            <div class="btn-group">
                <input type="submit" value="Register">
                <input type="button" value="Batal" onclick="window.location.href='index.php';">
            </div>
        </form>
    </div>
</body>
</html>
