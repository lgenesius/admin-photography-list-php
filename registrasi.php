<?php
require 'function.php';

if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
            </script>";
            
    } else {
        echo mysqli_error($conn);

    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        label{
            display:block;
        }
    </style>
</head>
<body>

        <div class="container">
            <div class="registrasi-section">
                <div>
                    <h1>Halaman Registrasi</h1>
                    <form action="" method="post">
                        <ul>
                            <li>
                                <label for="username">Username: </label>
                                <input type="text" name="username" id="username" required>
                            </li>
                            <li>
                                <label for="password">Password: </label>
                                <input type="password" name="password" id="password" required>
                            </li>
                            <li>
                                <label for="password2">Konfirmasi Password: </label>
                                <input type="password" name="password2" id="password2" required>
                            </li>
                            <li>
                                <p>Sudah punya akun? <a href="login.php" id="login-dulu">Ke Login</a></p>
                            </li>
                            <li>
                                <button type="submit" name="register">Register!</button>
                            </li>
                        </ul>

                    </form>
                </div>
            </div>
            <a href="https://github.com/lgenesius/admin-photography-list-php" target="_blank">Created and Designed by Luis Genesius</a>
        </div>
    
</body>
</html>