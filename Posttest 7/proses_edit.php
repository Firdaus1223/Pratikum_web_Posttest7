<?php
include 'koneksi.php';

  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $nama_makanan   = $_POST['nama_makanan'];
  $jumlah   = $_POST['jumlah'];
  $alamat   = $_POST['alamat'];
  $email   = $_POST['email'];
  $notelp   = $_POST['notelp'];
  $foto = $_FILES['foto']['name'];

  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg');  
    $x = explode('.', $foto); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                      
                   $query  = "UPDATE pemesanan SET nama = '$nama', nama_makanan = '$nama_makanan', jumlah = '$jumlah', alamat = '$alamat', email = '$email ', notelp = '$notelp', foto = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
              }
    } else {
      $query  = "UPDATE pemesanan SET nama = '$nama', nama_makanan = '$nama_makanan', jumlah = '$jumlah', alamat = '$alamat', email = '$email ', notelp = '$notelp'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }
