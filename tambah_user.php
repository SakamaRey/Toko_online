<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<style>
    .container{
        width: 80%;
        margin: 0 auto;
        margin-top: 5vh;

    }
    .container h3{
        text-align: center;
        color : black;
        font-family : 'Montserrat';
    }
    .container .form-btn{
        margin-top: 3vh;
        background-color: Black;
        padding: 10px;
    }
    .container .form-btn:hover{
        background-color: green;
        color: white;
    }
</style>
<body>
<div class="container">
    <h3 align="center">Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        Nama:
        <input type="text" name="nama_user" value="" class="form-control">
        Username:
        <input type="text" name="username" value="" class="form-control">
        Password:
        <input type="text" name="password" value="" class="form-control">
        Role:
        <select name="level" class="form-control">
            <option></option>
            <option value="petugas">Petugas</option>
            <option value="pelanggan">Pelanggan</option>
        </select>
        <input type="submit" name="simpan" value="Tambah user" class="form-btn btn btn-primary">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>