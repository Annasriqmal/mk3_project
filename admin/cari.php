<!DOCTYPE html>
<html>
<head>
<style>
   body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    fieldset {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .btn-group {
        text-align: right;
    }

    .btn-edit{
        padding: 5px 10px;
        background-color:  green;
        color: black;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-edit:hover, .btn-reset:hover {
        background-color: #0056b3;
    }

    .btn-delete {
        color: black;
        padding: 5px 10px;
        background-color: red;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-delete:hover {
        text-decoration: underline;
    }

    </style>

</head>
<body>

<?php
require '../conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $search_term = $_POST["nosiri"];
    $sql = "SELECT * FROM peralatan WHERE nosiri = '$search_term'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $bil = 1;
        ?>
        <table class="table">
            <tr>
                <th>Bil</th>
                <th>Nama Pelajar</th>
                <th>Jenis Peralatan</th>
                <th>Jenama</th>
                <th>No Siri</th>
            </tr>
            <?php
            while ($row = $result->fetch_object()) {
                ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->pelajar; ?></td>
                    <td><?php echo $row->jenisperalatan; ?></td>
                    <td><?php echo $row->jenama; ?></td>
                    <td><?php echo $row->nosiri; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <?php
    } else {
        echo "Tiada rekod ditemui.";
    }
}
?>


</body>
</html>
