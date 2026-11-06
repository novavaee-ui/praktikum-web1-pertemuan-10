
<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga, stok)
        VALUES ('$nama_produk', '$harga', '$stok')");

    if ($query) {
        echo "<script>
                alert('Data produk berhasil disimpan!');
                window.location='index.php';
              </script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
