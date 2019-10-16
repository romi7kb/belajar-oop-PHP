<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Keluarga</h1>
    <fieldset>
    <form action="" method="get">
    <label for="">Jumlah Anggota Keluarga</label>
    <input type="number" name="Jumlah" min="1" id="" required><br>
    <input type="submit" name="kirim1"  value="buat">
    </form>
    </fieldset>
    <?php
    if (isset($_GET['kirim1'])) {
       for ($i=0; $i < $_GET['Jumlah']; $i++) { 
    ?>
    <form action="kk1.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama[]" id="" required><br>
    <label for="">NIK</label>
    <input type="number" name="nik[]" id="" required><br>
    <label for="">Alamat</label>
    <input type="text" name="alamat[]" id="" required><br>
    <label for="">Umur</label>
    <input type="number" name="umur[]" min="1" max="30" id="" required>
    <hr>
    <?php
     }
    ?>
    <input type="submit" name="kirim"  value="kirim">
    </form>
    <?php
    }   
    ?>
    
</body>
</html>