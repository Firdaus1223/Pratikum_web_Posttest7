<?php
    require "../koneksi.php";

    if(isset($_POST["signup"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        $email = $_POST["email"];

        $check = mysqli_query($koneksi, "SELECT username FROM akun WHERE username = '$user' ");
        if( mysqli_fetch_assoc($check) ){
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username telah digunakan!');
                    window.location.href='regis.php';
                </script>";
            die();
        }
        else{
            if($pass === $cpass){
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO akun VALUES ('', '$user', '$pass', '$email', 'user')";
                $result = mysqli_query($koneksi, $sql);
    
                if ( $result ){
                    echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Berhasil Ditambah');
                            window.location.href='login.php';
                        </script>";
                    die();
                }
                else{
                    echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Gagal Ditambah');
                            window.location.href='regis.php';
                        </script>";  
                    die();
                }
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password tidak sama');
                        window.location.href='regis.php';
                    </script>";
                die();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <title> Sign Up </title>
</head>
<body>
    <header>
        <hr>
        <h1> Sign Up User </h1>
    </header>
    <hr>
    <nav class="header">
    <h2> Sign Up </h2>
    </nav>
    <main>
        <div class="input-group">
        <form id="signup" action="regis.php" method="post">
            <table>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="user" placeholder="masukan username anda" required> </td>
                </tr>
                <tr>
                    <td>  Email </td>
                    <td> <input type="email" name="email" placeholder="masukan email valid" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="masukan password anda" required> </td>
                </tr>
                <tr>
                    <td> Konfirmasi Password </td>
                    <td> <input type="password" name="cpass" placeholder="masukan password anda" required> </td>
                </tr>
            </table>
            <input type="submit" name = 'signup' value="Sign Up">
            <div class="fnav">
            <p>
            Already a member?  <a href="login.php"> Sign in </a>
            </p>
            </div>
            </div>
        </form>
    </main>