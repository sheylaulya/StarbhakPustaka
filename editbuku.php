<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];
    $jumlah_halaman = $_POST['jumlah_halaman'];

    $sql = "UPDATE data_buku SET judul_buku = '$judul_buku', penulis = '$penulis' ,jenis_buku = '$jenis_buku' ,penerbit = '$penerbit' ,jumlah_halaman = '$jumlah_halaman' WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: data_buku.php');
    }else{
        header('Location: editbuku.php?status=gagal');
    }
}
?>