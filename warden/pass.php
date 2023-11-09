<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homeStyles.css">
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST" action="cpass.php">
        <label for="new_password">New Password:</label>
        <input type="password" name="katalaluan" required><br>

        <button type="submit">Change Password</button>
    </form>
</body>
</html>