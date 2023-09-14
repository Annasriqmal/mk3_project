<!DOCTYPE html>
<html>
<head>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        form, table {
            margin: 20px auto;
            width: 80%;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form fieldset {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        form legend {
            font-weight: bold;
            font-size: 1.2em;
        }

        form table {
            border-collapse: collapse;
            width: 100%;
        }

        form table td {
            padding: 10px;
        }

        form .btn-group {
            text-align: right;
        }

        button[type="submit"], button[type="reset"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #007bff;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a.btn-edit, a.btn-delete {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
            color: #fff;
        }

        a.btn-edit {
            background-color: #007bff;
        }

        a.btn-delete {
            background-color: #dc3545;
        }

    </style>
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
            <th>Tindakan</th>
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
                <td>
                    <a href="index.php?menu=pelajar&edit=<?php echo $row->idperalatan; ?>" class="btn-edit">Edit</a>
                    
                    <a href="padam.php?idperalatan=<?php echo $row->idperalatan; ?>" onclick="return confirm('Adakah anda pasti?')" class="btn-delete">Padam</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>