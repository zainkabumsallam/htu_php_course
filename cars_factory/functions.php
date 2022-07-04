<?php

function connection(){

    $connection = mysqli_connect('localhost', 'root', '', 'carsfactory');
    return $connection;

}

function get_car($id){
    $connection = connection();

    $sql = "SELECT * FROM cars WHERE id=$id;";
    $result = mysqli_query($connection, $sql);
    
    
        while($car = mysqli_fetch_assoc($result)){
            $cars[] = array(
                'id' => $car['id'],
                'car_model' => $car['car_model'],
                'manufacturing_year' => $car['manufacturing_year'],
                'sales_quantity' => $car['sales_quantity'],
                'reg_date' => $car['reg_date'],
            );
        }
        mysqli_close($connection);

        return $cars[0];
}
