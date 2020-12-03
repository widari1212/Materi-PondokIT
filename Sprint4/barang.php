<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <br>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Harga</label>
                <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Harga">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        
        </div>
        <div class="col-md-6">
            <?= "Nama Barang " . $_POST['nama_barang'] . "<br>"; ?>
            <?= "Harga Barang " . $_POST['harga']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form method="GET">
                <div class="form-group">
                    <label for="nama_kurir">nama kurir</label>
                    <input type="text" id="nama_kurir" name="nama_kurir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Pengirim</label>
                    <input type="text" name="nama_pengirim" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Asal Barang</label>
                    <input type="text" name="asal_barang" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tujuan Barang</label>
                    <input type="text" name="tujuan_barang" class="form-control">
                </div>
                <input type="submit" name="submit" value="kirim" class="btn btn-success">

            </form>
        </div>
        <div class="col-md-6">
            <?php 
                $nama = $_GET['nama_kurir'];
            ?>
            <?= "Nama Kurir : " . $nama . '<br>' ?>
            <?= "Nama Pengirim : " .$_GET['nama_pengirim'] . '<br>' ?>
            <?= "Asal Barang : " .$_GET['asal_barang'] . '<br>' ?>
            <?= "Tujuan Barang : " .$_GET['tujuan_barang'] . '<br>' ?>
        </div>
    </div>
</div>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<form action='' method="post">
    <input type='submit' name='logout' value='Logout' class="btn btn-danger">
    </form>
</body>
</html>
<!-- <?php
if (isset($_POST['logout'])) {
    setcookie('username', $username, time() - 3600, "/");
	setcookie('password', $password, time() - 3600, "/");
	header ('location: cookie.php');
}
?>                  

