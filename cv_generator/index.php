<?php include "./partials/header.php" ?>

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5 text-center">
                <h1>Login to create your CV.</h1>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="./login.php">

                    <div class="form-outline mb-4">
                        <label class="form-label" for="emailInput">Email</label>
                        <input type="email" id="emailInput" class="form-control form-control-lg" placeholder="Enter your email address" name="email" />
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="passwordInput">Password</label>
                        <input type="password" id="passwordInput" class="form-control form-control-lg" placeholder="Enter your password" name="user_password" />
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="./signup.php" class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<?php include "./partials/footer.php" ?>