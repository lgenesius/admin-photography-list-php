<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

$fotografi = query("SELECT * FROM fotografi");

if ( isset($_POST["cari"]) ) {
    $fotografi = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        @media print{
            .print{
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

        <div class="container-all">
            <div>
                <a href="logout.php" class="print logout">Logout</a>
            </div>

            <div class="container-section">
                <h1>Daftar Fotografi</h1>
                
                <div class="tampung-tambah">
                    <a href="tambah.php" class="print tambah">Tambah Data Fotografi</a>
                </div>

                <form action="" method="post" class="print">
                    <input type="text" name="keyword" size=40 autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword" class="cari-keyword">
                    <button type="submit" name="cari" id="tombol-cari">Cari</button>
                </form>

                <div id="container">
                    <table border="1" cellpadding="10" cellspacing="0" class="table">
                        <tr>
                            <th>No.</th>
                            <th class="print">Aksi</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Tema</th>
                            <th>Tipe</th>
                            <th>Dimensi</th>
                        </tr>    

                        <?php $nomor = 0; foreach($fotografi as $row) : $nomor++; ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td class="aksi">
                                    <a href="ubah.php?id=<?= $row["id"]?>" class="print">Ubah</a><a href="hapus.php?id=<?php echo $row["id"];?>" onclick="return confirm('yakin?')" class="print">Hapus</a>
                                </td>
                                <td><img src="img/<?php echo $row["gambar"];?>" alt="" width="75px" class="gambar"></td>
                                <td><?php echo $row["nama"];?></td>
                                <td><?php echo $row["tema"];?></td>
                                <td><?php echo $row["tipe"];?></td>
                                <td><?php echo $row["dimensi"];?></td>
                            </tr>   
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>