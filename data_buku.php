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
    <div id="databuku" class="container">
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
                    <a href="data-peminjam.php">Data Siswa</a>
                </div>
            </div>
        </nav>

        <div class="row-1">
            <div class="row-1box">
                <h3>Data Buku</h3>
                <a href="tambahbuku.php">Tambah Buku</a>
            </div>
            <div class="row-1head">
                <div class="searchbar">
                    <a href="data_buku.php">
                        <img src="asset/search.png" alt="search">
                    </a>
                    <input type="text" name="" placeholder="Cari Buku"></form>
                </div>
                <img class="akun" src="asset/account.png" alt="akun">
            </div>

        </div>
    </div>
</body>