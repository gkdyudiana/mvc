<div class="container-login">
    <form action="<?= BASEURL; ?>/auth/proses" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="username" class="form-control" name="username" id="username" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>