<style>
    li {
        margin-top: 10;
    }
</style>

<?php
include_once './partials/header.php';


$car = get_car($_GET['id']);
?>

<h1>Car: <?= $car['car_model'] ?></h1>
<hr>

<div class="row mt-4">
    <div class="col-6">
        <ul>
            <li><strong>Car ID: </strong> <?= $car['id'] ?></li>
            <li><strong>Manufacturing year: </strong> <?= $car['manufacturing_year'] ?></li>
            <li><strong>Sales quantity: </strong> <?= $car['sales_quantity'] ?></li>
            <li><strong>Last update: </strong> <?= $car['reg_date'] ?></li>
        </ul>
    </div>
    <div class="col-6">
        <a href="./edit.php?id=<?= $car['id'] ?>" class="btn btn-warning">Edit</a>
        <a href="./delete.php?id=<?= $car['id'] ?>" class="btn btn-danger ml-5">Delete</a>
        <a href="./sell.php?id=<?= $car['id'] ?>" class="btn btn-success ml-5" id="sellBtn">Sell</a>
    </div>
</div>

<script>
    $('#sellBtn').click(function() {

    });
</script>


<?php include_once './partials/footer.php'; ?>