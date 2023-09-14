
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden</title>
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
    <h2>Senarai Warden</h2>

    <?php
    if (!isset($_GET['edit'])) {
        ?>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>Daftar Warden</legend>
                <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="namawarden" required></td>
                    </tr>
                    <tr>
                        <td>No KP Warden</td>
                        <td><input type="text" name="nokpwarden" required></td>
                    </tr>
                    <tr>
                        <td>Kata Laluan</td>
                        <td><input type="text" name="katalaluan" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="btn-group">
                            <button type="submit">SIMPAN</button>
                            <button type="reset" >BATAL</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form><br><br><br>
    <?php
    } else {
        $idwarden = $_GET['edit'];
        $sql = "SELECT * FROM warden WHERE idwarden = $idwarden";
        $result = $conn->query($sql);
        $row = $result->fetch_object();
        ?>
        <form action="kemaskini.php" method="post">
            <input type="hidden" name="idwarden" value="<?php echo $row->idwarden; ?>">
            <fieldset>
                <legend>Kemaskini Data Warden</legend>
                <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="namawarden" required value="<?php echo $row->namawarden; ?>"></td>
                    </tr>
                    <tr>
                        <td>No KP Warden</td>
                        <td><input type="text" name="nokpwarden" required value="<?php echo $row->nokpwarden; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kata Laluan</td>
                        <td><input type="text" name="katalaluan" required value="<?php echo $row->katalaluan; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="btn-group">
                            <button type="submit" class="btn-edit">SIMPAN</button>
                            <button type="reset" class="btn-reset">BATAL</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    <?php
    }
    ?>

    <table class="table">
        <tr>
            <th>Bil</th>
            <th>Nama Warden</th>
            <th>No KP Warden</th>
            <th>Kata Laluan</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM warden ORDER BY namawarden";
        $result = $conn->query($sql);
        while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row->namawarden; ?></td>
                <td><?php echo $row->nokpwarden; ?></td>
                <td><?php echo $row->katalaluan; ?></td>
                <td>
                    <a href="index.php?menu=pelajar&edit=<?php echo $row->idwarden; ?>" class="btn-edit">Edit</a>
                    
                    <a href="padam.php?idwarden=<?php echo $row->idwarden; ?>" onclick="return confirm('Adakah anda pasti?')" class="btn-delete">Padam</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
