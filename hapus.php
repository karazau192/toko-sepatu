<?php
include("config.php");
if( isset($_GET['id']) ){
    // ambil id dari query string
    $id = $_GET['id'];
    // buat query hapus
    $sql = "DELETE FROM projek_web WHERE id=$id";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if( $query ){
    header('Location: list-siswa.php');
    } else {
    die("gagal menghapus...");
    }
   } else {
    die("akses dilarang...");
   }
   ?>

