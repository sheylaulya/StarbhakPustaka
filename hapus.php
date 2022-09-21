
<?php
include 'koneksi.php';

if (isset($_GET['id_buku'])) {
    header('Location: data_buku.php');
}

$id_buku = $_GET ['id_buku'];

$sql = "DELETE FROM data_buku WHERE id_buku = '$id_buku'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: data_buku.php');
}else{
    header('Location: hapus.php?status=gagal');
}

if (isset($_GET['id_siswa'])) {
    header('Location: data_siswa.php');
}

$id_siswa = $_GET ['id_siswa'];

$sql = "DELETE FROM data_siswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: data_siswa.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>