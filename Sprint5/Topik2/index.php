<!DOCTYPE html>
<html>

<head>
    <title>AUTOLOAD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <center>
        <h1>Ayo Hitung Bangun Datar Gaes</h1>
    </center>
    <hr><hr>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form method="POST" action="">
                    <center>
                        <h3>Lingkaran</h3>
                    </center>
                    <div class="form-group">
                        <label>Jari-Jari</label>
                        <input type="text" name="jari" class="form-control" placeholder="Masukkan Jari-jari">
                    </div>
                    <div class="form-group">
                        <label>Phi</label>
                        <input type="text" name="phi" class="form-control" placeholder="Masukkan Phi">
                    </div>
                    <button type="submit" name="hitung1" class="btn btn-success">Hitung</button>
                </form>
            </div>
            <div class="col-sm">
                <form method="POST" action="">
                    <center>
                        <h3>Segitiga</h3>
                    </center>
                    <div class="form-group">
                        <label>Alas</label>
                        <input type="text" name="alas" class="form-control" placeholder="Masukkan Alas">
                    </div>
                    <div class="form-group">
                        <label>Tinggi</label>
                        <input type="text" name="tinggi" class="form-control" placeholder="Masukkan Tinggi">
                    </div>
                    <button type="submit" name="hitung2" class="btn btn-success">Hitung</button>
                </form>
            </div>
            <div class="col-sm">
                <form method="POST" action="">
                    <center>
                        <h3>Persegipanjang</h3>
                    </center>
                    <div class="form-group" <label>Panjang</label>
                        <input type="text" name="panjang" class="form-control" placeholder="Masukkan Panjang">
                    </div>
                    <div class="form-group">
                        <label>Lebar</label>
                        <input type="text" name="lebar" class="form-control" placeholder="Masukkan Lebar">
                    </div>
                    <button type="submit" name="hitung3" class="btn btn-success">Hitung</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Datar\Lingkaran;

    spl_autoload_register(function ($class) {
        $class = explode("\\", $class);
        $class = end($class);
    });

    new Lingkaran();
    ?>


    <?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Datar\Segitiga;

    spl_autoload_register(function ($class) {
        $class = explode("\\", $class);
        $class = end($class);
    });

    new Segitiga();
    ?>


    <?php
    require_once __DIR__ . "/vendor/autoload.php";

    use Ruang\Persegipanjang;

    spl_autoload_register(function ($class) {
        $class = explode("\\", $class);
        $class = end($class);
    });

    new Persegipanjang();
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>