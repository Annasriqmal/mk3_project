<?php
require '../conn.php';

$session_id = $_SESSION['idadmin'];
$katalaluan = $_POST['katalaluan'];


$katalaluan = password_hash($katalaluan, PASSWORD_BCRYPT);


$sql = "UPDATE admin SET katalaluan = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $katalaluan);
    $stmt->execute();
    $stmt->close();

   
    header('Location: index.php');
} else {
    
    echo "Error in prepared statement.";
}
?>