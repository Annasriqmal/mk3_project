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
    <h2>Carian Peralatan Pelajar</h2>

    <form action="cari.php" method="post">
        <fieldset>
            <legend>Carian Peralatan</legend>
            <table>
                <tr>
                    <td>No siri</td>
                    <td><input type="text" name="nosiri" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="btn-group">
                        <button class="btn-edit" type="submit">CARI</button>
                        <button class="btn-reset" type="reset">BATAL</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form><br><br><br>
</body>
</html>
