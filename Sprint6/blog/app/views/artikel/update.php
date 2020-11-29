<div class="container col-md">
  <form action="<?= BASEURL; ?>/artikel/ubah/" method="post">
    <input type="hidden" name="id" id="id" value="<?= $data['art']['id'] ?>">
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author" name="author" value="<?= $data['art']['author'] ?>">
    </div>


    <div class="form-group">
      <label for="title">Title</label>
      <input type="title" class="form-control" id="title" name="title" value="<?= $data['art']['title'] ?>">
    </div>

    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" class="form-control" id="content" name="content" value="<?= $data['art']['content'] ?> ">
    </div>
    <button type="submit" class="btn btn-success">Update Data</button>
  </form>
</div>
