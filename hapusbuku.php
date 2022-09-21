
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
    header('Location: hapusbuku.php?status=gagal');
}
?>