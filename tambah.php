<?php
session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ){


    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Fotografi</title>
    <link rel="stylesheet" href="css/tambah.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="tambah-section">
            <div>
                <h1>Tambah Data Fotografi</h1>

                <form action="" method="post" enctype="multipart/form-data">
                    <ul>
                        <li>
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" id="nama" required>
                        </li>
                        <li>
                            <label for="tema">Tema : </label>
                            <input type="text" name="tema" id="tema" required>
                        </li>
                        <li>
                            <label for="tipe">Tipe : </label>
                            <input type="text" name="tipe" id="tipe" required>
                        </li>
                        <li>
                            <label for="dimensi">Dimensi : </label>
                            <input type="text" name="dimensi" id="dimensi" required>
                        </li>
                        <li>
                            <label for="gambar">Gambar : </label>
                            <input type="file" name="gambar" id="gambar" required class="input-gambar">
                        </li>
                        <li>
                            <button type="submit" name="submit">Tambah Data</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

</body>
</html>