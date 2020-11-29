<div class="container mt-3">


  <div class="row">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
          Tambah Data Artikel
        </button>
    </div>
  </div>


    <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/artikel/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari artikel.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="sumbit" id="tombolCari">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <div class="row">
    <div class="col-6">
          <h3>Judul Artikel</h3>
           <ul class="list-group">
             <?php foreach($data['art'] as $art) : ?> 
           
              <li class="list-group-item"><?= $art['author']; ?>
               <a href="<?= BASEURL; ?>/artikel/hapus/<?= $art['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?'); ">hapus</a>
               <a href="<?= BASEURL; ?>/artikel/getUbah/<?= $art['id']; ?>" class="badge badge-success float-right ml-1">update</a>
                <a href="<?= BASEURL; ?>/artikel/detail/<?= $art['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>

                
              </li>
            </ul>
              <?php endforeach; ?> 
      </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/artikel/tambah" method="post">
          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author">
          </div>

          <div class="form-group">
            <label for="title">Title</label>
            <input type="title" class="form-control" id="title" name="title" placeholder="name@example.com">
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content">
          </div>            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


