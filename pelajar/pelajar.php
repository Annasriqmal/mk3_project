
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pelajarStyles.css">
    <title>Peralatan</title>
</head>

<body>
    <h2>Pengurusan Peralatan</h2>

    <?php
    if (!isset($_GET['edit'])) {
        ?>
        <form action="simpan.php" method="post">
            <fieldset>
                <legend>Daftar Peralatan</legend>
                <table>
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="pelajar" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Peralatan</td>
                        <td><input type="text" name="jenisperalatan" required ></td>
                    </tr>
                    <tr>
                        <td>Jenama</td>
                        <td><input type="text" name="jenama" required></td>
                    </tr>
                    <tr>
                        <td>No Siri</td>
                        <td><input type="text" name="nosiri" required ></td>
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
        $idperalatan = $_GET['edit'];
        $sql = "SELECT * FROM peralatan WHERE idperalatan = $idperalatan";
        $result = $conn->query($sql);
        $row = $result->fetch_object();
        ?>
        <form action="kemaskini.php" method="post">
            <input type="hidden" name="idperalatan" value="<?php echo $row->idperalatan; ?>">
            <fieldset>
                <legend>Kemaskini Data Peralatan</legend>
                <table>
                    <tr>
                        <td>Nama Pelajar</td>
                        <td><input type="text" name="pelajar" required value="<?php echo $row->pelajar; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Peralatan</td>
                        <td><input type="text" name="jenisperalatan" required value="<?php echo $row->jenisperalatan; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Jenama</td>
                        <td><input type="text" name="jenama" required value="<?php echo $row->jenama; ?>" ></td>

                    </tr>
                    <tr>
                        <td>No Siri</td>
                        <td><input type="text" name="nosiri" required value="<?php echo $row->nosiri; ?>" ></td>
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
