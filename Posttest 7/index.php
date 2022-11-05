<?php
    require "koneksi.php";
    require "login/session.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pemesanan</title>
    <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style type="text/css">

    </style>
  </head>
  <body>
  <nav class="navtop">
    	<div>
    		<h1>Pemesanan</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
			<a href="../Posttest 4/posttest4.php"> <i class="fa fa-list"></i>posttest4</a>
			<a href="../Posttest 4/about.php"> <i class="fa fa-user"></i>About</a>
      <a href="login/logout.php" id="Logout"> <i class="fa fa-backward"></i> Log Out </a>
    	</div>
    </nav>
	<div class="footer-basic">
	<footer>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a class="button" href="#popup1">Services</a></li>
			<li><a href="../Posttest 4/about.php">About</a></li>
			<li><a class="button" href="#popup1">Terms</a></li>
			<li><a class="button" href="#popup1">Privacy Policy</a></li>
		</ul>
		<p class="copyright">Muhammad Firdaus © 2022</p>
	</footer>

</div class="index">
    <center><h2>Read Orders</h2><center>
    <center><a class ="tomboltambah" href="tambah_produk.php">Create Order</a><center>
    <form  action = "index.php" method = "GET">
        <table>
            <tr> 
                <td>
                  <div class="form-outline">
                    <input type="text" name="keyword" id="keyword" class="form-control">
                  </div>
                </td>
                <td>
                  <button type="submit" class="btn btn-secondary" name="search">
                  <i class="fas fa-search"></i>
                  </button>
                </td>
            </tr>
        </table>
  </form>
    <br/>
    <table>
      <thead>
        <tr>
          <td>#</td>
          <td>Nama</td>
          <td>Nama Makanan</td>
          <td>Jumlah</td>
          <td>Alamat</td>
          <td>Email</td>
          <td>No telp</td>
          <td>Waktu</td>
          <td>Nama Gambar</td>
          <td>Voucher</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
      <?php
      if (isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $result = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nama LIKE '%$keyword%' OR nama_makanan LIKE '%$keyword%'" );
      }
      else{
        $query = "SELECT * FROM pemesanan ORDER BY id ASC";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
          die ("Query Error: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
        }
      }

      $no = 1;
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nama_makanan']; ?></td>
          <td><?php echo $row['jumlah']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['notelp']; ?></td>
          <td><?php echo $row['waktu']; ?></td>
          <td><?php echo $row['foto']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
          <td class="actions">
              <a class="edit" href="edit_produk.php?id=<?php echo $row['id']; ?>"><i class="fas fa-pen fa-xs"></i></a> |
              <a class="hapus"href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash fa-xs"></i></a>
          </td>
      </tr>
      <?php
        $no++; 
      }
      ?>
    </tbody>
    </table>
  </body>
</html>
