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
             return "Koneksi berhasil";
        } else {
            return "Koneksi database Gagal";
        }
    }
}
class Cart extends Database
{
    // manampilkan semua data
    public function index()
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT * from cart");
        // var_dump($datasiswa);
        return $datasiswa;
    }
    // menambah data
    public function create($nama_produk, $kategori_produk, $jumlah_produk,$harga_produk,$deskripsi,$sub_total)
    {
        mysqli_query($this->koneksi, "INSERT INTO cart VALUES (null,'$nama_produk','$kategori_produk','$jumlah_produk','$harga_produk','$deskripsi','$sub_total') ");
    }
    // menampilkan data berdasarkan id
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT * from cart where id='$id'");
        return $datasiswa;
    }
    public function total()
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT sub_total from cart");
        $total=0;
        foreach ($datasiswa as $data ) {
            $total+=$data['sub_total'];
        }
        return $total;
    }
    public function jumlah()
    {
        $datasiswa = mysqli_query($this->koneksi, "SELECT nama_produk from cart");
        $jumlah = 0;
        foreach ($datasiswa as $data ) {
            $jumlah+=count($data['nama_produk']);
        }
        return $jumlah;
    }
    // meng update data berdasarkan id
    public function update($id,$nama_produk, $kategori_produk, $jumlah_produk,$harga_produk,$deskripsi,$sub_total)
    {
        mysqli_query($this->koneksi, "UPDATE cart SET nama_produk='$nama_produk',kategori_produk='$kategori_produk',jumlah_produk='$jumlah_produk',harga_produk='$harga_produk',deskripsi='$deskripsi',sub_total='$sub_total' WHERE id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM cart WHERE id='$id'");
    }
}
// koneksi db
$cart = new Cart();
