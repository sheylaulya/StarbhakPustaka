<?php
include 'koneksi.php';


$id_siswa = $_GET['id_siswa'];
$sql = "SELECT*FROM data_siswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);

if ( mysqli_num_rows($query) < 1){ 
    die ("data tidak ditemukan...");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarbhakPustaka</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body>
    <div id="editsiswa" class="container">
        <nav>
            <div class="logo">
                <div class="logo-text">
                    <img src="asset/books.png" alt="logo">
                    <h3>StarbhakPustaka</h3>
                </div>
                <div class="garis"></div>
            </div>

            <div class="menubar">
                <div class="dashboard">
                    <img src="asset/dashboard (1).png" alt="dashboard">
                    <a href="index.php">Dashboard</a>
                </div>
                <div class="data-buku">
                    <img src="asset/books-stack-of-three (1).png" alt="data-buku">
                    <a href="data_buku.php">Data Buku</a>
                </div>
                <div class="data-peminjam">
                    <img src="asset/reading-book (1).png" alt="data-peminjam">
                    <a href="data_siswa.php">Data Siswa</a>
                </div>
            </div>
            <div class="copyright">
                <p>copyright </p>
                <img src="asset/copyright (1).png" alt="copyright">
                <p> Sheyla Aulya</p>
            </div>
        </nav>
        <div class="row-1">
            <div class="judul">
                <img src="asset/edit (1).png" alt="edit">
                <h2>Ubah Data Siswa</h2>
            </div>
            <img class="akun" src="asset/account.png" alt="akun">
        </div>
        <form method="post">
            <div class="id_siswa">
                <label>Id Siswa<br>
                    <input type="text" name="id_siswa" value="<?php echo $data['id_siswa']?>" required="required"></label>
            </div>
            <div class="nama_siswa">
                <label>Nama Siswa <br>
                    <input type="text" name="nama_siswa"  value="<?php echo $data['nama_siswa']?>" required="required"
                        placeholder="isi dengan nama siswa"></label>
            </div>
            <div class="tanggal_lahir">
                <label>tanggal_lahir <br>
                    <input type="date" name="tanggal_lahir"  value="<?php echo $data['tanggal_lahir']?>" required="required"></label>
            </div>
            <div class="alamat">
                <label>Alamat <br>
                    <input type="text" name="alamat"  value="<?php echo $data['alamat']?>" required="required" placeholder="isi dengan alamat siswa (kota/daerah)"></label>
            </div>
            <div class="jenis_kelamin">
                <label>Jenis Kelamin<br>
                    <input type="text" name="jenis_kelamin"  value="<?php echo $data['jenis_kelamin']?>" required="required"
                        placeholder="isi dengan jenis kelasmin siswa"></label>
            </div>
            <div class="agama">
                <label>Agama <br>
                    <input type="text" name="agama"  value="<?php echo $data['agama']?>" required="required" placeholder="isi dengan agama siswa"></label>
            </div>
            <div class="kelas">
                <label>Kelas <br>
                    <input type="text" name="kelas"  value="<?php echo $data['kelas']?>" required="required" placeholder="X/XI/XII"></label>
            </div>
            <div class="jurusan">
                <label>Jurusan <br>
                    <input type="text" name="jurusan"  value="<?php echo $data['jurusan']?>" required="required"
                        placeholder="isi dengan jurusan siswa"></label>
            </div>
            <a class="batal" href="data_siswa.php">Batal</a>
            <input class="enter" type="submit" name="simpan" value="simpan">
        </form>

    </div>
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
        header('Location: formeditsiswa.php?status=gagal');
    }
}
?>
</body>
