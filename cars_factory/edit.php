<style>
    label {
        font-weight: bold;
        margin-top: 10;
    }
</style>
<?php
include_once './partials/header.php';

$car = get_car($_GET['id']);
?>

<form class="w-50" method="POST" action="./update.php">
    <div class="mb-3">
        <input name="id" type="hidden" value="<?= $_GET['id'] ?>">
        <label for="carModel" class="form-label">Car model: </label>
        <input name="car_model" type="text" class="form-control" id="carModel" value="<?= $car['car_model'] ?>">
    </div>
    <div class="mb-3">
        <label for="manufacturingYear" class="form-label">Manufacturing year: </label>
        <input name="manufacturing_year" type="text" class="form-control" id="manufacturingYear" value="<?= $car['manufacturing_year'] ?>">
    </div>
    <div class="mb-3">
        <label for="salesQuantity" class="form-label">Sales quantity: </label>
        <input name="sales_quantity" type="number" class="form-control" id="salesQuantity" value="<?= $car['sales_quantity'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include_once './partials/footer.php'; ?>