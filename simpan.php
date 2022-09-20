<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "INSERT INTO data_buku VALUES ('$id_buku', '$judul_buku', '$penulis', '$jenis_buku', '$penerbit', '$tahun_terbit')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: data_buku.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>