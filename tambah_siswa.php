
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
    <div id="tambahsiswa" class="container">
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
                <img src="asset/tambah.png" alt="tambah">
                <h2>Tambah Siswa</h2>
            </div>
            <img class="akun" src="asset/account.png" alt="akun">
        </div>
        <form method="post">
            <div class="id_siswa">
                <label>Id Siswa<br>
                    <input type="text" name="id_siswa" required="required" placeholder="isi dengan id siswa"></label>
            </div>
            <div class="nama_siswa">
                <label>Nama Siswa <br>
                    <input type="text" name="nama_siswa" required="required"
                        placeholder="isi dengan nama siswa"></label>
            </div>
            <div class="tanggal_lahir">
                <label>Tanggal Lahir <br>
                    <input type="date" name="tanggal_lahir" required="required"></label>
            </div>
            <div class="alamat">
                <label>Alamat <br>
                    <input type="text" name="alamat" required="required" placeholder="isi dengan alamat siswa (kota/daerah)"></label>
            </div>
            <div class="jenis_kelamin">
                <label>Jenis Kelamin<br>
                    <input type="text" name="jenis_kelamin" required="required"
                        placeholder="isi dengan jenis kelasmin siswa"></label>
            </div>
            <div class="agama">
                <label>Agama <br>
                    <input type="text" name="agama" required="required" placeholder="isi dengan agama siswa"></label>
            </div>
            <div class="kelas">
                <label>Kelas <br>
                    <input type="text" name="kelas" required="required" placeholder="X/XI/XII"></label>
            </div>
            <div class="jurusan">
                <label>Jurusan <br>
                    <input type="text" name="jurusan" required="required"
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
  


</body>