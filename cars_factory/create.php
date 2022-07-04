<style>
    label {
        font-weight: bold;
        margin-top: 10;
    }
</style>
<?php
include_once './partials/header.php';
?>

<form class="w-50" method="POST" action="./store.php">
    <div class="mb-3">
        <label for="carModel" class="form-label">Car model: </label>
        <input name="car_model" type="text" class="form-control" id="carModel">
    </div>
    <div class="mb-3">
        <label for="manufacturingYear" class="form-label">Manufacturing year: </label>
        <input name="manufacturing_year" type="text" class="form-control" id="manufacturingYear">
    </div>
    <div class="mb-3">
        <label for="salesQuantity" class="form-label">Sales quantity: </label>
        <input name="sales_quantity" type="number" class="form-control" id="salesQuantity">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include_once './partials/footer.php'; ?>