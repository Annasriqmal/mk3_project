<?php
require '../conn.php';

$idperalatan=$_POST['idperalatan'];
$pelajar = $_POST['pelajar'];
$jenisperalatan = $_POST['jenisperalatan'];
$jenama = $_POST['jenama'];
$nosiri = $_POST['nosiri'];

$sql = "UPDATE peralatan
        SET pelajar = '$pelajar', jenisperalatan = '$jenisperalatan', jenama='$jenama' , nosiri='$nosiri'
        WHERE idperalatan = $idperalatan";
$conn->query($sql);

header('location: index.php?menu=pelajar');