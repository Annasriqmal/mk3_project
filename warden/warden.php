
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="wardenStyles.css">
    <title>Warden</title>
</head>

<body>
    <h2>Pengurusan Pelajar</h2>

    <?php
    if (!isset($_GET['edit'])) {
        ?>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>Daftar Pelajar</legend>
                <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="warden" required></td>
                    </tr>
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="namapelajar" required ></td>
                    </tr>
                    <tr>
                        <td>No KP Pelajar</td>
                        <td><input type="text" name="nokppelajar" required></td>
                    </tr>
                    <tr>
                        <td>Kata Laluan</td>
                        <td><input type="text" name="katalaluan" required ></td>
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
        $idpelajar = $_GET['edit'];
        $sql = "SELECT * FROM pelajar WHERE idpelajar = $idpelajar";
        $result = $conn->query($sql);
        $row = $result->fetch_object();
        ?>
        <form action="kemaskini.php" method="post">
            <input type="hidden" name="idpelajar" value="<?php echo $row->idpelajar; ?>">
            <fieldset>
                <legend>Kemaskini Data Pelajar</legend>
                <table>
                    <tr>
                        <td>Nama Warden</td>
                        <td><input type="text" name="warden" required value="<?php echo $row->warden; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="namapelajar" required value="<?php echo $row->namapelajar; ?>" ></td>
                    </tr>
                    <tr>
                        <td>No KP Pelajar</td>
                        <td><input type="text" name="nokppelajar" required value="<?php echo $row->nokppelajar; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Kata Laluan</td>
                        <td><input type="text" name="katalaluan" required value="<?php echo $row->katalaluan; ?>" ></td>
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
            <th>ID</th>
            <th>Nama Warden</th>
            <th>Nama Pelajar</th>
            <th>No KP Pelajar</th>
            <th>Kata Laluan</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM pelajar ORDER BY warden";
        $result = $conn->query($sql);
        while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row->warden; ?></td>
                <td><?php echo $row->namapelajar; ?></td>
                <td><?php echo $row->nokppelajar; ?></td>
                <td><?php echo $row->katalaluan; ?></td>
                <td>
                    <a href="index.php?menu=pelajar&edit=<?php echo $row->idpelajar; ?>" class="btn-edit">Edit</a>
                    
                    <a href="padam.php?idpelajar=<?php echo $row->idpelajar; ?>" onclick="return confirm('Adakah anda pasti?')" class="btn-delete">Padam</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
