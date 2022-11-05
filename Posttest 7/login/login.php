<?php
    require '../koneksi.php';

    if(isset($_POST['Login'])){
        $username = $_POST["username"];
        $pass = $_POST["pass"];
        $hasil = mysqli_query($koneksi, "SELECT username, pass, sta FROM akun WHERE username = '$username' OR email = '$username'");

        if(mysqli_num_rows($hasil)== 1){
            $row = mysqli_fetch_assoc($hasil);

            if(password_verify($pass, $row['pass'])){

                if($row['sta'] == 'admin') {    
                    session_start();
                    if(isset($_SESSION["sida"])) {
                        header("Location: ../index.php", TRUE, 301);
                        die();
                    }
                    else {
                        $_SESSION["start"] = time(); 
                        $_SESSION["expire"] = $_SESSION['start'] + (30 * 60) ;
                        $_SESSION["sida"] = session_id();
                        header("Location: ../index.php", TRUE, 301);
                        die();
                    }
                }
                elseif ($row['sta'] == 'user') {
                    session_start();
                    if(isset($_SESSION["sidu"])) {
                        header("Location: ../Posttest4/posttest4.php", TRUE, 301);
                        die();
                    }
                    else {
                        $_SESSION["start"] = time(); 
                        $_SESSION["expire"] = $_SESSION['start'] + (30 * 60) ;
                        $_SESSION["sidu"] = session_id();
                        header("Location: ../Posttest4/posttest4.php", TRUE, 301);
                        die();
                    }
                }
                else {
                    header("Location: login.php", TRUE, 301);
                    die();
                }
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password salah');
                        window.location.href='login.php';
                    </script>";
                die();
            }
        }
        else{
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username atau Password Salah!');
                    window.location.href='login.php';
                </script>";
            die();
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
    <title> Log In </title>
</head>
<body>
    <header>
        <hr>
        <h1> Selamat Datang </h1>
    </header>
    <hr>
    <nav class="header">
    <h2> Log In </h2>
    </nav>
    <main>
        <div class="input-group">
        <form id="login" action="./login.php" method="post" >
            <table>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="username" placeholder="masukan username anda" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="masukan passwrod anda" required> </td>
                </tr>
            </table>
            <input type="submit" name = "Login" value="Log In">
            <div class="fnav">
            <p>
            Not yet a member? <a href = "regis.php"> Sign Up </a>
            </p>
        </div>
        </div>
        </form>
    </main>
</body>
</html>