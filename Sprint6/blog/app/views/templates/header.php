<!DOCTYPE html>
<html>

<head>
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
  <header style=" font-size: 3px; padding: 5px; background-color: #E9ECEF; text-align: center; color: #343A40;">
    <h2>Widari1212</h2>
    <h5>Tugas MVC</h5>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">My_Artikel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link active" href="<?= BASEURL; ?>/artikel">Artikel <span class="sr-only">(current)</span></a>
          <a class="nav-link active" href="<?= BASEURL; ?>/logout">Logout<span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
  </nav>