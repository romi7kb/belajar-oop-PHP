<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Masukan Data Diri dan Jumlah Hari Kerja</h1>
    <form action="latihkarya1.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama" id="" required><br>
    <label for="">NIP</label>
    <input type="number" name="nip" id="" required><br>
    <label for="">Alamat</label>
    <input type="text" name="alamat" id="" required><br>
    <label for="">Jumlah Hari Kerja</label>
    <input type="number" name="jumlahHariKerja" min="1" max="30" id="" required><br>
    <input type="submit" name="kirim"  value="kirim">
    </form>
</body>
</html>