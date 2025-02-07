<?php

$id_tempat =$_POST['id_tempat'];
$nama_tempat=$_POST['nama_tempat'];
$harga =$_POST['harga'];
$lokasi =$_POST['lokasi'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO tempat_parkir VALUES('$id_tempat','$nama_tempat',
'$harga','$lokasi')");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}
