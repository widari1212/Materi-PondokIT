<div class="container mt-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['art']['author'];?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['art']['title'];?></h6>
      <p class="card-text"><?= $data['art']['content'];?></p>
      <a href="<?= BASEURL; ?>/artikel" class="card-link">Back</a>
      <a href="<?= BASEURL; ?>" class="card-link">Home</a>
    </div>
</div>
</div>