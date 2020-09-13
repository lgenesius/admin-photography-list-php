<?php

session_start();

if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data fotografi berdasarkan id
$ftr = query("SELECT * FROM fotografi WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ){


    // cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
            </script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Fotografi</title>
    <link rel="stylesheet" href="css/ubah.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="ubah-section">
            <div>
                <h1>Ubah Data Fotografi</h1>

                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $ftr["id"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $ftr["gambar"]; ?>">
                    <ul>
                        <li>
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" id="nama" required value="<?= $ftr["nama"]?>">
                        </li>
                        <li>
                            <label for="tema">Tema : </label>
                            <input type="text" name="tema" id="tema" required value="<?= $ftr["tema"]?>">
                        </li>
                        <li>
                            <label for="tipe">Tipe : </label>
                            <input type="text" name="tipe" id="tipe" required value="<?= $ftr["tipe"]?>">
                        </li>
                        <li>
                            <label for="dimensi">Dimensi : </label>
                            <input type="text" name="dimensi" id="dimensi" required value="<?= $ftr["dimensi"]?>">
                        </li>
                        <li>
                            <label for="gambar">Gambar : </label>
                            <br>
                            <img src="img/<?= $ftr["gambar"]?>" alt="gambar" width="100" class="gambar">
                            <br>
                            <input type="file" name="gambar" id="gambar" class="input-gambar">
                        </li>
                        <li>
                            <button type="submit" name="submit">Ubah Data</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
</html>