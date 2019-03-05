<?php

    // helpers
    $brand = $_GET["brand"];
    $car_type = $_GET["car_type"];
    $body_type = $_GET["body_type"];
    $fuel = $_GET["fuel"];
    $fuel = $_GET["fuel"];
    $color = $_GET["color"];
    $cubic = $_GET["cubic"];
    $hp = $_GET["hp"];
    $mileage = $_GET["mileage"];


    try {
        $sql = "INSERT INTO `cars` 
            (`brand`, `car_type`, `body_type`, `fuel`, `color`, `cubic`, `hp`, `mileage`) VALUES 
            ('$brand' , '$car_type', '$body_type', '$fuel', '$color', '$cubic', '$hp', '$mileage')";

        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "New record created successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

?>