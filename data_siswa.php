<?php
include 'koneksi.php'
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
    <div id="datasiswa" class="container">
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
            <div class="row-1head">
                <div class="searchbar">
                    <a href="data_siswa.php">
                        <img src="asset/search.png" alt="search"> 
                    </a>
                   <input type="search" name="" placeholder="Cari Siswa">
                </div>
                <img class="akun" src="asset/account.png" alt="akun">
                <div class="row-1-text">
                    <h3>Data Siswa</h3>
                    <a href="tambah_siswa.php">Tambah Siswa</a>
                </div>
            </div>
        </div>
            <div class="content">
                <table>
                    <tr>
                        <th>Id Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>jenis_kelamin</th>
                        <th>Agama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Opsi</th>
                    </tr>
                        <?php
                    $sql = ("SELECT * FROM data_siswa");
                    $query = mysqli_query($connect, $sql);
                    while($data = mysqli_fetch_array($query)){
                        echo"
                        <tr>
                            <td>$data[id_siswa]</td>
                            <td>$data[nama_siswa]</td>
                            <td>$data[tanggal_lahir]</td>
                            <td>$data[alamat]</td>
                            <td>$data[jenis_kelamin]</td>
                            <td>$data[agama]</td>
                            <td>$data[kelas]</td>
                            <td>$data[jurusan]</td>
                            <td>
                            <div class='opsi'>
                            <a href='formeditsiswa.php?id_siswa=".$data ['id_siswa']."'></a>
                            <a href='hapussiswa.php?id_siswa=".$data ['id_siswa']."'></a>
                            </td>
                         </tr>
                      ";
            } 
                    ?>
                    </td>
                </table>
        </div>
    </div>
</body>