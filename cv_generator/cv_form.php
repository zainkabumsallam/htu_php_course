<?php include "./partials/header.php"; ?>
<div class="container mt-5 w-50">
    <div class="text-center">
        <h1>CV Generator</h1>
        <hr>
    </div>
    <div class="row mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>

    </div>

    <input type="email" class="form-control mt-3" placeholder="Email" aria-label="Email">
    <input type="number" class="form-control mt-3" placeholder="Phone Number" aria-label="Phone Number">

    <div class="row mt-3">
        <div class="col">
            <select class="form-select" aria-label="Nationality">
                <option selected>Nationality</option>
                <option value="1">Jordanian</option>
                <option value="2">Syrian</option>
                <option value="3">Palestinian</option>
            </select>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Address" aria-label="Address">
        </div>
    </div>

    <div class="input-group mt-3">
        <span class="input-group-text">Date of Birth</span>
        <input type="date" class="form-control">
    </div>

    <div class="row mt-3">
        <div class="col">
            <select class="form-select" aria-label="Gender">
                <option selected>Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>
        <div class="col">
            <select class="form-select" aria-label="Martial Status">
                <option selected>Martial Status</option>
                <option value="1">Single</option>
                <option value="2">Married</option>
            </select>
        </div>
    </div>

    <div class="d-flex align-items-end justify-content-end">
        <button type="submit" class="btn btn-primary mt-5">Next</button>
    </div>
</div>
<?php include "./partials/footer.php"; ?>