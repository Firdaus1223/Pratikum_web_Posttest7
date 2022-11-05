<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="light">
    <input class="input-dark" type="checkbox" id="toggle">

    <label class="toggle" for="toggle">
        <i class="bx bxs-sun"></i>
        <i class="bx bx-moon"></i>
        <span class="ball"></span>
    </label>

    <!-- JS File -->
    <script type="text/javascript" src="main.js"></script>
    </div>
    
    <div id="popup1" class="overlay" >
        <div class="popup">
            <h2>Dalam Pengerjaan</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Pembuat akan Segera memperbaiki tombol ini, atas perhatiannya terima kasih.
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="nav">
            <div class="logo">
                <a href="#">
                    <p>KULINER SAMARINDA</p>
                </a>
            </div>
            <ul id="link">
                <input type="text" name="search" placeholder="Search..">
                <a href="posttest4.php">Home</a>
                <a href="form/index.php">Food</a>
                <a href="about.php">About</a>
                <a href="../Posttest 5/index.php">Database</a>
            </ul>
        </div>
        <div class="header">
            <h1>Nasi&nbsp<span>Kuning</span></h1>
        </div>

        <div class="content-header">
            <br><br><br><br><br>
            <p id="p1">Nasi Kuning di Samarinda merupakan menu nasi yang dimasak dengan kunyit dan santan. Kemudian disajikan dengan tambahan lauk-pauk seperti telur bumbu, ayam, ikan, atau daging. Berbeda dengan daerah lain di kota Samarinda menggunakan ikan haruan, telor atau daging sapi yang diberi bumbu merah atau bumbu bali.</p>
            <br>
            <input type="text" name="text" class="search-input" placeholder="cari tempat kuliner...">
            <input class="search-btn" type="button" value="Cari">
        </div>

        <div class="col-img">
            <img src="foto/nasi-kuning-indonesian-food-design-vector-241172538-removebg-preview.png" alt="">
            
        </div>    
        <div class="footer-basic">
            <footer>
                <ul>
                    <li><a href="posttest4.php">Home</a></li>
                    <li><a class="button" href="#popup1">Services</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a class="button" href="#popup1">Terms</a></li>
                    <li><a class="button" href="#popup1">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Muhammad Firdaus © 2022</p>
            </footer>
        </div>
        
    </div>
    
</body>
</html>
