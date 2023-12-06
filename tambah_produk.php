<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <h3>Tambah Produk</h3>
    <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        Nama Produk :
        <input type="text" name="nama_produk" value="" class="form-control">
        Harga : 
        <input type="text" name="harga" value="" class="form-control">
        Deskripsi :
        <input type="text" name="deskripsi" value="" class="form-control">
        Foto :
        <input type="file" value="" class="form-control" name="foto"><br>
        <input type="submit" name="Simpan" value="Tambah Produk" class="btn btn-primary">
        <a href="produk.php" class="btn btn-primary">Kembali</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>