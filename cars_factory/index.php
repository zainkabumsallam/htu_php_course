<style>
    body>a {
        display: none;
    }
</style>

<?php
include_once './partials/header.php';

$connection = connection();

$sql = "SELECT * FROM cars;";
$result = mysqli_query($connection, $sql);


while ($car = mysqli_fetch_assoc($result)) {
    $cars[] = array(
        'id' => $car['id'],
        'car_model' => $car['car_model'],
        'manufacturing_year' => $car['manufacturing_year'],
        'sales_quantity' => $car['sales_quantity'],
        'reg_date' => $car['reg_date'],
    );
}

mysqli_close($connection);

?>


<div class="d-flex justify-content-between align-items-center">
    <h1>Car Data Managment</h1>
    <a href="./create.php" class="btn btn-success">Add</a>
</div>
<hr class="mb-5">

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Car model</th>
            <th scope="col">Manufacturing year</th>
            <th scope="col">Sales quantity</th>
            <th scope="col">Registration date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?= $car['id'] ?></td>
                <td><?= $car['car_model'] ?></td>
                <td><?= $car['manufacturing_year'] ?></td>
                <td><?= $car['sales_quantity'] ?></td>
                <td><?= $car['reg_date'] ?></td>
                <td>
                    <a href="./car.php?id=<?= $car['id'] ?>">View car model</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?php include_once './partials/footer.php'; ?>