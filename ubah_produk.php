<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <style>
        * {
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_produk = mysqli_query($conn, "select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk = mysqli_fecth_array($qry_get_produk);
    ?>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px"></div>
    <h3 align="center">Ubah Produk</h3>
    <form action="proses_ubah_produk.php" method = "post" enctype="multipasrt/form-data">
        <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
        Nama Produk :
        <input type="text" name="nama_produk" value="<?=$dt_produk['nama_produk']?>">
        Harga :
        <input type="number" name="harga" value="<?=$dt_produk['harga']?>">
        Foto Produk : 
        <img src="foto produk/<?= $dt_produk['foto'] ?>" alt="" wudth="100px">
        <input type="hidden" name="foto" value="<?=$dt_produk['foto'] ?>">
        <input type="file" name="foto_produk" value="Tambah Produk" class="form-control">
        <input type="submit" name="simpan" value="Ubah Produk" class="btn btn-btndark mt-3">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>