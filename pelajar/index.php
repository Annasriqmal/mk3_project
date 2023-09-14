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
    <title>Sistem Pendaftaran Peralatan Elektrik</title>
    <style>
        <style>
        body {
            background-color: #f0f0f0;
        }
        ul {
            list-style: none;
            font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
            text-align: center;
            padding: 0px;
            margin-top: 4px;
        }

        ul li {
            width: 200px;
            float: left;
            background-color: dimgrey;
        }

        li ul {
            display: none;
        }

        a {
            text-decoration: none;
            display: block;
            background-color: black;
            line-height: 25pt;
            color: white;
            font-weight: bolder;
            font-family: monospace;
            padding: 7px 0px;
        }

        a:hover {
            background-color:grey;
            color: white;
        }

        li:hover ul {
            display: block;
        }

        .menubar {
            background-color: white;
            width: 100%;
            height: 50px;
        }

        .home {
            width: 504px;
        }

        .product {
            width: 504px;
        }

        .con {
            width: 510px;
        }
    </style>
    </style>
</head>
<body>
    <ul class="menubar">
        <li class="home"><a href="index.php?menu=home">Home</a></li>

        <li class="product">
            <a href="index.php?menu=pelajar">Senarai Peralatan</a></li>

        <li class="con">
            <a href="../logout.php">Log Out</a></li>
    </ul>
<?php
$menu = 'home'; #default value
if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
}
include "$menu.php";
?>

</body>
</html>