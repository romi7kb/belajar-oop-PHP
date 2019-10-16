<?php
// menambah/memanggil file
include '../database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - read data</title>
</head>

<body>
    <center>Data siswa</center>
    <a href="create.php">Input data siswa </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nomor Induk Siswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($siswa->index() as $data) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><a href="siswa/show.php?id=<?= $data['id'] ?>&aksi=show">Show</a></td>
                <td><a href="siswa/edit.php?id=<?= $data['id'] ?>&aksi=update">edit</a></td>
                <td><a href="siswa/proses.php?id=<?= $data['id'] ?>&aksi=delete" onclick="return confirm('Apakah Anda yakin menghapus data ini?');">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>