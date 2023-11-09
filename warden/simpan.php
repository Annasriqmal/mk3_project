<?php
require '../conn.php';

$warden=$_POST['warden'];
$namapelajar = $_POST['namapelajar'];
$nokppelajar = $_POST['nokppelajar'];
$katalaluan = $_POST['katalaluan'];

$sql = "INSERT INTO pelajar VALUES(null, '$warden', '$namapelajar', '$nokppelajar' ,'$katalaluan')";
$conn->query($sql);

header('location: index.php?menu=pelajar');