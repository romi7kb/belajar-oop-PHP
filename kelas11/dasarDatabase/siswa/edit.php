<?php
include '../database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
    foreach ($siswa->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" value="<?= $nis ?>" required></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?= $nama ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat Siswa</th>
                    <td><textarea name="alamat" required cols="30" rows="10"><?= $alamat ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>