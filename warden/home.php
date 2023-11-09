<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="homeStyles.css">
</head>
<body>
    <h2>Senarai Peralatan Pelajar</h2><br><br>
    <table class="table">
        <tr>
            <th>Bil</th>
            <th>Nama Pelajar</th>
            <th>Jenis Peralatan</th>
            <th>Jenama</th>
            <th>No Siri</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM peralatan ORDER BY pelajar";
        $result = $conn->query($sql);
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
</body>
</html>