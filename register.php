
<?php include_once("inc/navbar.php") ?>
 <div class="container my-5">
        <h1 class="text-center text-danger my-4">welcome to register page</h1>
        <form method="POST" action="handlers/register.php">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text"  class="form-control" name="fname">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text"  class="form-control" name="lname"> 
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"  class="form-control" name="pass">
            </div>
            <div class="mb-3">
                <button type="submit" name="rgister" class="form-control btn btn-danger">Register</button>
            </div>
        </form>
    </div>
<?php include_once("inc/footer.php") ?>

















