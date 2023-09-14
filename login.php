<?php
require 'conn.php';

$idpengguna = $_POST['idpengguna'];
$katalaluan = $_POST['katalaluan'];

if ($idpengguna == 'admin') {
    $sql = 'SELECT * FROM admin';
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($katalaluan, $row->katalaluan)) {
        $_SESSION['idpengguna'] = 'admin';
        header('location: admin/');
    } else {
        ?>
        <script>
            alert('Maaf, kata laluan salah.');
            window.location = './';
        </script>
        <?php
    }
} elseif ($idpengguna == 'warden') {
    $sql = 'SELECT * FROM warden';
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($katalaluan, $row->katalaluan)) {
        $_SESSION['idpengguna'] = 'warden'; 
        header('location: warden/');
    } else {
        ?>
        <script>
            alert('Maaf, kata laluan salah.');
            window.location = './';
        </script>
        <?php
    }
} elseif ($idpengguna == 'pelajar') {
    $sql = 'SELECT * FROM pelajar';
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($katalaluan, $row->katalaluan)) {
        $_SESSION['idpengguna'] = 'pelajar'; 
        header('location: pelajar/');
    } else {
        ?>
        <script>
            alert('Maaf, kata laluan salah.');
            window.location = './';
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert('Maaf, ID pengguna/kata laluan salah.');
        window.location = './';
    </script>
    <?php
}
?>




