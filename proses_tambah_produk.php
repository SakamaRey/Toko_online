<?php
include 'koneksi.php';
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$deskripsi=$_POST['deskripsi'];
$ekstensi=array('png','jpg','jpeg','gif','JPG','webp');
$filename = $_FILES['foto']['size'];
$ext = pathinfo($filename,PATHINFO_EXTENSION);

if (in_array($ext,$ekstensi)) {
    header("location:tambah_produk.php?alert=gagal_ekstensi");
} else{
    if($ukuran < 1044070){
        $xx = $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/foto_produk/'.''.$filename);
        mysqli_query($conn, "INSERT INTO produk VALUES(NULL,'$nama_produk','$harga','$deskripsi','$xx')");
        echo "<script>alert('Sukses menambahkan produk');location.href='produk.php';</script>";
    }else{
        echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php'</script>";
    }
}
?>