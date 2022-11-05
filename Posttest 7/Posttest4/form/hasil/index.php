<!DOCTYPE html>
<html lang="en" id="bg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pembayaran</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
        <h2 class="terima">==== Struk Belanja ====<br>
            Pesanan anda akan segera dikirim
        </h2>
        <hr class="new4" width="95%" size="4" color="#333">
        <div class="hasil">
            <div class="atas">
                <?php
                    if(isset($_POST['submit'])){
                        $nama = $_POST['nama'];
                    }
                    echo "Hai $nama     ";
                    echo "Terimakasih telah memesan <3";
                ?>
            </div>

            <div class="tengah" align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $makanan = $_POST['makanan'];
                        $jumlah = $_POST['jumlah'];
                        $alamat = $_POST['alamat'];
                        $wa = $_POST['wa'];
                        $email = $_POST['email'];
                    }
                    echo "<br> Data Pesanan mu :";
                    echo "<br>";
                    

                    echo "<pre> Makanan : $makanan";
                    echo "<br> Jumlah   : $jumlah";
                    echo "<br> Alamat   : $alamat";
                    echo "<br> Whatsapp : $wa";
                    echo "<br> Email    : $email";

                ?>

            
            </div>
            <div class="bawah">
                *Konfirmasi Pembayaran melalui email.
        </div>
        <hr class="new4" width="100%" size="4" color="#333">
        </div>

    </main>
        <h2 class="terima">==== Terima Kasih ====<br>
            WWW.kulinerku.com<br>
          
        </h2>
        <h5 class="h5">  SMS 0821 0910 6052 <br>
            Call 081255<br>
            EMAIL :kulinerku.CO.ID</h5>
    </footer>
    <script src="index.js"></script>


</body>

</html>