<?php
session_start();
class Profile
{
    public function profile()
    {
        if (isset($_SESSION['status'])) {
            ?>
            <?php
        } else {
            echo '<a href="index.php">Login</a>';
        }
    }
}
$profile = new Profile();
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>profile</title>
            </head>

            <body>
                <h3><a href="index.php">Home</a> | <a href="add.php">Buat Artikel</a> | <a href="logout.php">Keluar</a></h3>
                <hr>
                <h1>Profile</h1>
                <p>
                    Selamat Datang <b><i><?php echo $_SESSION['username']; ?></i></b>
                </p>
            </body>

            </html>

