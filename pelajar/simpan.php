<?php
require '../conn.php';

$pelajar =$_POST['pelajar'];
$jenisperalatan = $_POST['jenisperalatan'];
$jenama = $_POST['jenama'];
$nosiri = $_POST['nosiri'];

$sql = "INSERT INTO peralatan VALUES(null, '$pelajar', '$jenisperalatan', '$jenama' ,'$nosiri')";
$conn->query($sql);

header('location: index.php?menu=pelajar');