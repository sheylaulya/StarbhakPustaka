<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE data_siswa SET nama_siswa = '$nama_siswa', tanggal_lahir = '$tanggal_lahir', 
    alamat = '$alamat' ,jenis_kelamin = '$jenis_kelamin' ,agama = '$agama' ,kelas = '$kelas' ,jurusan = '$jurusan'WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

    if($query) {
        header('Location: data_siswa.php');
    }else{
        header('Location: editsiswa.php?status=gagal');
    }
}
?>