<?php
include 'koneksi.php';


$id_buku = $_GET['id_buku'];
$sql = "SELECT*FROM data_buku WHERE id_buku = '$id_buku'";
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
    <div id="editbuku" class="container">
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
                    <img src="asset/books-stack-of-three.png" alt="data-buku">
                    <a href="data_buku.php">Data Buku</a>
                </div>
                <div class="data-peminjam">
                    <img src="asset/reading-book.png" alt="data-peminjam">
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
                <img src="asset/edit (1).png" alt="tambah">
                <h2>Ubah Data Buku</h2>
            </div>
            <img class="akun" src="asset/account.png" alt="akun">
        </div>
        <form method="post">
            <div class="id_buku">
                <label>Id Buku <br>
                    <input type="text" name="id_buku" value="<?php echo $data['id_buku']?>" required="required" placeholder="isi dengan id buku"></label>
            </div>
            <div class="judul_buku">
                <label>Judul Buku <br>
                    <input type="text" name="judul_buku" value="<?php echo $data['judul_buku']?>" required="required"
                        placeholder="isi dengan judul buku"></label>
            </div>
            <div class="penulis">
                <label>Penulis <br>
                    <input type="text" name="penulis" value="<?php echo $data['penulis']?>" required="required" placeholder="isi dengan penulis"></label>
            </div>
            <div class="jenis_buku">
                <label>Jenis Buku <br>
                    <input type="text" name="jenis_buku" value="<?php echo $data['jenis_buku']?>" required="required"
                        placeholder="isi dengan jenis buku"></label>
            </div>
            <div class="penerbit">
                <label>Penerbit <br>
                    <input type="text" name="penerbit" value="<?php echo $data['penerbit']?>" required="required"
                        placeholder="isi dengan nama penerbit"></label>
            </div>
            <div class="jumlah_halaman">
                <label>Jumlah Halaman <br>
                    <input type="number" name="jumlah_halaman" value="<?php echo $data['jumlah_halaman']?>" required="required"
                        placeholder="isi dengan jumlah"></label>
            </div>
            <a class="batal"href="data_buku.php">batal</a>
            <input class="enter" type="submit" name="simpan" value="simpan">
        </form>

    </div>
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
        header('Location: formeditbuku.php?status=gagal');
    }
}
?>
</body>