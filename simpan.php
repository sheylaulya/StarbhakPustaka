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
if (isset($_POST['simpan'])) {
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat= $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO data_siswa VALUES ('$id_siswa', '$nama_siswa', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$agama','$kelas','$jurusan')";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: data_siswa.php');
    }else{
        header('Location: simpansiswa.php?status=gagal');
    }
}
?>