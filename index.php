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
    <div id="index" class="container">
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
                    <img src="asset/dashboard.png" alt="dashboard">
                    <a href="index.htmk">Dashboard</a>
                </div>
                <div class="data-buku">
                    <img src="asset/books-stack-of-three (1).png" alt="data-buku">
                    <a href="data_buku.php">Data Buku</a>
                </div>
                <div class="data-peminjam">
                    <img src="asset/reading-book.png" alt="data-peminjam">
                    <a href="data-peminjam.php">Data Siswa</a>
                </div>
            </div>
        </nav>
        <div class="row-1">
            <div class="welcome">
                <h3>Selamat Datang di StarbhakPustaka</h3>
                <p>Apakah ada yang baru didalam inventarismu?</p>
            </div>
            <div class="searchbar">
                <a href="tampilan.html">
                    <img src="asset/search.png" alt="search">
                </a>
                <input type="text" name="" placeholder="Cari Dashboard"></form>
            </div>
            <img class="akun" src="asset/account.png" alt="akun">
        </div>
        <div class="row-2">
            <div class="total">
                <div class="total-buku">
                    <img src="asset/book.png" alt="total-buku">
                    <h3> Total buku <br>
                        <?php
                        $sql = "SELECT COUNT(*) FROM data_buku";
                        $query = mysqli_query($connect, $sql);

                        $total = mysqli_fetch_array($query);
                        echo $total[0];
                        ?>
                    </h3>
                </div>
                <div class="total-peminjam">
                    <img src="asset/librarian.png" alt="total-peminjam">
                    <h3>Total Siswa <br>
                        <?php
                        $sql = "SELECT COUNT(*) FROM data_siswa";
                        $query = mysqli_query($connect, $sql);

                        $total = mysqli_fetch_array($query);
                        echo $total[0];
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row-3">
            <div class="row-3-text">
                <h4>Buku - Buku didalam Inventoris</h4>
                <a href="data-buku.php">selengkapnya -></a>
            </div>
            <div class="buku">
                <div class="buku1">
                    <img src="asset/buku kimia.jpg" alt="buku kima">
                    <div class="buku1-text">
                        <h5>Kimia Kelas XI</h5>
                        <p>Aas Saidah, Michael Purba</p>
                    </div>
                </div>
                <div class="buku2">
                    <img src="asset/laut bercerita.jpg" alt="buku laut bercerita">
                    <div class="buku2-text">
                        <h5>Laut Bercerita</h5>
                        <p>Leila S. Chudori</p>
                    </div>
                </div>
                <div class="buku3">
                    <img src="asset/sapiens.jpg" alt="buku sapiens">
                    <div class="buku3-text">
                        <h5>Sapiens</h5>
                        <p>Leila S. Chudori</p>
                    </div>
                </div>
                <div class="buku4">
                    <img src="asset/buku fisika.webp" alt="buku fisika">
                    <div class="buku3-text">
                        <h5>Fisika SMA</h5>
                        <p>Tri Widodo</p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>