<?php
session_start();
require 'function.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ( $key === hash('sha256', $row['username']) ){
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"]) ){
    header("Location: index.php");
    exit;
}

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if ( mysqli_num_rows($result) === 1 ){
        // cek password
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])){
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie
                setcookie('id', $row['id'], time()+10080);
                setcookie('key', hash('sha256', $row['username']), time()+10080);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="login-section">
            <div>
                <h1>Halaman Login</h1>

                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="username">Username: </label>
                            <input type="text" name="username" id="username">
                        </li>

                        <li>
                            <label for="password">Password: </label>
                            <input type="password" name="password" id="password">
                        </li>
                        <li>
                            <label for="remember">Remember me</label>
                            <input type="checkbox" name="remember" id="remember">
                        </li>
                        <li>
                            <p>Tidak ada akun? <a href="registrasi.php" id="register-dulu">Register dulu</a></p>
                        </li>
                        <li>
                            <button type="submit" name="login">Login</button>
                        </li>
                    </ul>
                </form>

                <?php if(isset($error) ) : ?>
                    <p style="color:red; font-style:italic;">username atau password salah!</p>
                <?php endif; ?>
            </div>
        </div>
        <a href="https://github.com/lgenesius/admin-photography-list-php" target="_blank">Created and Designed by Luis Genesius</a>
    </div>

    
</body>
</html>