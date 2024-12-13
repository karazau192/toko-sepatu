<?php 
 
 include("config.php"); 
  
 // cek apakah tombol daftar sudah diklik atau blum? 
 if(isset($_POST['daftar'])){ 
  
     // ambil data dari formulir 
     $nama = $_POST['nama']; 
     $email = $_POST['email']; 
     $telepon = $_POST['no_telepon']; 
     $model = $_POST['model_sepatu']; 
     $ukuran = $_POST['ukuran_sepatu']; 
     $pembayaran = $_POST['metode_pembayaran']; 
     $catatan = $_POST['catatan_tambahan']; 
  
     // buat query 
     $sql = "INSERT INTO projek_web (nama, email, no_telepon, model_sepatu, 
 ukuran_sepatu,metode_pebayaran,catatan_tambahan) VALUE ('$nama', '$email', '$telepon', '$model', '$ukuran','$pembayaran','$catatan')"; 
     $query = mysqli_query($db, $sql); 
  
     // apakah query simpan berhasil? 
     if( $query ) { 
         // kalau berhasil alihkan ke halaman index.php dengan yug7yg7ustatus=sukses 
         header('Location: index.php?status=sukses'); 
     } else { 
         // kalau gagal alihkan ke halaman indek.php dengan status=gagal 
         header('Location: index.php?status=gagal'); 
     } 
  
  
 } else { 
     die("Akses dilarang...");}