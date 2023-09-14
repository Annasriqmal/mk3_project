<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #777;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Pendaftaran Peralatan Elektrik</h1>
        <h2>Log In</h2>
        <form action="login.php" method="post">
            <label for="idpengguna">ID Pengguna</label>
            <input type="text" name="idpengguna" id="idpengguna" required>
            <label for="katalaluan">Password</label>
            <input type="password" name="katalaluan" id="katalaluan" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
