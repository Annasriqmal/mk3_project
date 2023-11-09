<?php
require '../conn.php';
if(!isset($_SESSION['idpengguna'])) header('location: ../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="indexStyles.css">
    <title>Sistem Pengurusan Peralatan</title>
</head>
<body>
    <ul class="menubar">
        <li class="menu"><a href="index.php?menu=home">Senarai Peralatan</a></li>

        <li class="menu">
            <a href="index.php?menu=pelajar">Senarai Pelajar</a></li>

        <li class="menu">
            <a href="index.php?menu=pass">Tukar Katalaluan</a></li>

        <li class="menu">
            <a href="../logout.php">Log Out</a></li>
    </ul>
<?php
$menu = 'home'; 
if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
}
include "$menu.php";
?>

</body>
</html>