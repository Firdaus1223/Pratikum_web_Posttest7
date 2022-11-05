<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Pemesanan
    </title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' >
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="/Posttest 4/posttest4.php">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="/Posttest 4/about.php">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
    </div>

    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>

    <div class="nav">
        <div class="menu-wrap">
            <a href="/Posttest 4/posttest4.php">
                <div class="logo">
                    PEMESANAN
                </div>
            </a>
            <div class="menu h-xs">
                <a href="/posttest4.php">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="about.php">
                    <div class="menu-item">
                        About
                    </div>
                </a>
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Menu
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <div class="cart-btn">
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class='bx bx-cart-alt'></button>

                    <div id="id01" class="modal">
                      
                      <form class="modal-content animate" action="hasil/index.php" method="post">
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                    
                            <h2 class="isi">Pemesanan</h2>
                            <hr align="center" size="4" color="black">
                                <form action="hasil/index.php" method="POST">
                                    <label for="fullname"> Full Name </label>
                                        <input
                                            required
                                            placeholder="Input Name"
                                            id="nama"
                                            name="nama"
                                            type="text"
                                            autocomplete='off'
                                        />
                                    <br>
                            
                                    <label for="makanan"> Nama masakan </label>
                                    <select name="makanan">
                                        <option value="pilih">-Pilih Makanan-</option>
                                        <option value="nasi-kuning">Nasi Kuning</option>
                                        <option value="nasi-bekepor">Nasi Bakepor</option>
                                        <option value="sate-payau">Sate Payau</option>
                                        <option value="sate-ayam">Sate Ayam</option>
                                        <option value="sate-kambing">Sate Kambing</option>
                                        <option value="bakso-gresik">Bakso Gresik</option>
                                    </select>
                                    <br>
                            
                                    <label for="jumlah"> Jumlah</label>
                                        <input
                                            placeholder="Jumlah"
                                            id="jumlah"
                                            name="jumlah"
                                            type="number"
                                            min="1"
                                        />
                                    <br>
                            
                                    <label for="alamat"> Alamat Rumah </label>
                                        <input
                                            required
                                            placeholder="Alamat"
                                            id="alamat"
                                            name="alamat"
                                            type="text"
                                            autocomplete='off'
                                        />
                                    <br>
                            
                                    <label for="email"> Email </label>
                                    <input
                                        required
                                        placeholder="Email"
                                        id="email"
                                        name="email"
                                        type="email"
                                        autocomplete='off'
                                    />
                                    <br>
                            
                                    <label for="wa"> No WhatsApp </label>
                                    <input
                                        required
                                        placeholder="WhatsApp"
                                        id="wa"
                                        name="wa"
                                        type="text"
                                        autocomplete='off'
                                    />
                                    <br>
                                    
                                    <div class="container" style="background-color:#f1f1f1">
                                        <input type="submit" name="submit" value="PESAN" class="inputan">
                                        <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                </form>

                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section">
        <div class="container">
            <div class="food-menu">
                <h1>
                    Apa yang akan kamu<span class="primary-color"> makan hari ini?</span> 
                </h1>
                <p>
                    Hallo sobat-sobat pecinta masakan dan kuliner dari samarinda, 
                    disini kalian bisa mesen makanan tanpa perlu keluar rumah lo.
                    <br>
                    caranya gampang tinggal pilih makanan yang kalian mau terus melakukan pemesanan deh, 
                    gampang bukan?. ayo tunggu apalagi pesen sekarang!!!.
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            Semua Makanan
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-2">
                        <button data-food-type="Nasi">
                            Nasi
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-4">
                        <button data-food-type="Sate">
                            Sate
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-food-type="Bakso">
                            Bakso
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    <div class="food-item Nasi-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(foto/nasi-kuning.jpeg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Nasi Kuning
                                    </h3>
                                    <span>
                                        Rp.15000
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class="bx bx-cart-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item Sate-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('foto/sate-payau.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Sate Payau
                                    </h3>
                                    <span>
                                        Rp.2000/Tusuk
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item Bakso-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('foto/bakso-gresik.jpg');">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Bakso Gresik
                                    </h3>
                                    <span>
                                        Rp.25000
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item Sate-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('foto/sate-kambing.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Sate Kambing
                                    </h3>
                                    <span>
                                        Rp.2000/Tusuk
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="food-item Nasi-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('foto/nasi-bekepor.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Nasi Bakepor
                                    </h3>
                                    <span>
                                        Rp.20000
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item Sate-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('foto/sate-ayam.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Sate Ayam
                                    </h3>
                                    <span>
                                        Rp.2000/Tusuk
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script src="index.js"></script>
</body>

</html>