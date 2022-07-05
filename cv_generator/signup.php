<?php include "./partials/header.php" ?>

<div class="container w-50 mt-5">
    <div class="mb-5 text-center">
        <h1>Create an account.</h1>
    </div>
    <form method="POST" action="./create_user.php">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="firstName">First name</label>
                    <input type="text" id="firstName" class="form-control" name="first_name"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="lastName">Last name</label>
                    <input type="text" id="lastName" class="form-control" name="last_name"/>
                </div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="emailInput">Email address</label>
            <input type="email" id="emailInput" class="form-control" name="email"/>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="passwordInput">Password</label>
            <input type="password" id="passwordInput" class="form-control" name="password"/>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

    </form>
</div>

<?php include "./partials/footer.php" ?>