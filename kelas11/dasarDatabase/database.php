<?php
class Database
{
    // $host = untuk memberitahu kita menggunakan server lokal yaitu local host
    // $user = username dari database
    // $pass = password untuk ,asuk ke localhost mysql kita, kosongkan jika tidak menggunakan password 
    // $db  = untuk memberi akses kita menggunakan database mana di server local kita(localhost)
    public $host = 'localhost',
        $user = "root",
        $pass = "123",
        $db = "dasarDB",
        $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if ($this->koneksi) {
             echo "berhasil";
        } else {
            return "Koneksi database Gagal";
        }
    }
}
class Siswa extends Database
{
    // manampilkan semua data
    public function index()
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT * from siswa");
        // var_dump($datasiswa);
        return $datasiswa;
    }
    // menambah data
    public function create($nis, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "INSERT INTO siswa VALUES ('','$nis','$nama','$alamat') ");
    }
    // menampilkan data berdasarkan id
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT * from siswa where id='$id'");
        return $datasiswa;
    }
    // meng update data berdasarkan id
    public function update($id, $nis, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "UPDATE siswa SET nis='$nis',nama='$nama',alamat='$alamat' WHERE id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM siswa WHERE id='$id'");
    }
}
// koneksi db
$siswa = new Siswa();
