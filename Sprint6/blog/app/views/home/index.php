<div class="container">
<div class="jumbotron jumbotron-fluid">
      <form action="<?= BASEURL; ?>/home/index" method="post">
        <h2 class="display-4">Silahkan Login Terlebih Dahulu</h2>
        <form action="<?= BASEURL; ?>/home/login" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="baba@gmail.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="baba123">
          </div>
          <button type="submit" class="btn btn-primary float-right mt-3" name="submit">Login</button>
          <div class="container mt-5">
            <p class="lead mt-5">belum punya akun?</p>
            <p><a href="<?= BASEURL; ?>/registrasi">Sign up</a></p>
          </div>
          </table>
        </form>
  </div>
</div>
</div>

