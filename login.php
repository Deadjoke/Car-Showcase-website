
<?php include_once("inc/navbar.php") ?>
 <div class="container my-5">
        <h1 class="text-center text-danger my-4">welcome to Login page</h1>
        <form action="handlers/handleLogin.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"  class="form-control" name="password">
            </div>
            <div class="mb-3">
                <button type="submit" name="login" class="form-control btn btn-danger">Login</button>
            </div>
        </form>
    </div>
<?php include_once("inc/footer.php") ?>