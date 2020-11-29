<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Registrasi</h1>
        <form action="<?= BASEURL; ?>/home/register" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="tes">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="tes@gmail.s">
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" id="password1" name="password1" value="123">
            </div>
            <div class="form-group">
                <label for="password2">Password</label>
                <input type="password" class="form-control" id="password2" name="password2" value="123">
            </div>
            <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
        </form>
        <p class="mt-5"><a href="<?= BASEURL; ?>/home">Kembali</a></p>
    </div>
</div>