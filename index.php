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
                    <a href="index.php">Dashboard</a>
                </div>
                <div class="data-buku">
                    <img src="asset/books-stack-of-three (1).png" alt="data-buku">
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
            <div class="welcome">
                <h3>Selamat Datang di StarbhakPustaka</h3>
                <p>Apakah ada yang baru didalam inventarismu?</p>
            </div>
            <div class="searchbar">
                <a href="tampilan.html">
                    <img src="asset/search.png" alt="search">
                </a>
                <input type="search" name="" placeholder="Cari Dashboard"></form>
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
                <h4>Buku - Buku didalam Inventaris</h4>
                <a href="data_buku.php">selengkapnya -></a>
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
                        <p>Yuval Noah Harari</p>
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

        <div class="row-kanan">
            <div class="row-kanan-1">
                <h4>Riwayat Penambahan Data buku</h4>
                <table>
                    <tr>
                        <th>Id Buku</th>
                        <th>Judul Buku</th>
                    </tr>
                    <?php
                      $sql = ("SELECT*FROM data_buku ORDER BY id_buku DESC LIMIT 4");
                      $query = mysqli_query($connect, $sql);
                      while($data = mysqli_fetch_array($query)){
                        echo"
                        <tr>
                            <td>$data[id_buku]</td>
                            <td>$data[judul_buku]</td>
                              ";
                            } 
                                    ?>
                </table>
            </div>
            <div class="row-kanan-2">
                <h5>Genre Buku didalam Inventaris</h5>
                <div class="chart">
                    <canvas id="myChart"></canvas></div>

            </div>
        </div>
        <div class="row-bawah">
            <h4>Riwayat Penambahan Data Siswa</h4>
            <table>
                <tr>
                    <th>Id Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </tr>
                <?php
                      $sql = ("SELECT*FROM data_siswa ORDER BY id_siswa DESC LIMIT 3");
                      $query = mysqli_query($connect, $sql);
                      while($data = mysqli_fetch_array($query)){
                        echo"
                        <tr>
                            <td>$data[id_siswa]</td>
                            <td>$data[nama_siswa]</td>
                            <td>$data[jenis_kelamin]</td>
                            <td>$data[kelas]</td>
                            <td>$data[jurusan]</td>
                              ";
                            } 
                                    ?>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
        <script src="chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'polarArea',
                data: {
                    labels: ['Pelajaran', 'Fiksi', 'Non-Fiksi', 'Sejarah'],
                    datasets: [{
                        label: '# of Votes',
                        data: [5, 4, 4, 3],
                        backgroundColor: [
                            '#76BA99',
                            '#ADCF9F',
                            '#CED89E',
                            '#FFDCAE'
                        ],
                    }]
                },
                options: {
                    scales: {
                        r: {
                            pointLabels: {
                                display: true,
                                centerPointLabels: true,
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });
        </script>

    </div>
</body>

</html>