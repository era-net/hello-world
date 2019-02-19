<?php

    // helpers
    $update = $_GET["update"];
    $brand = $_GET["brand"];
    $car_type = $_GET["car_type"];
    $body_type = $_GET["body_type"];
    $fuel = $_GET["fuel"];
    $color = $_GET["color"];
    $cubic = $_GET["cubic"];
    $hp = $_GET["hp"];
    $mileage = $_GET["mileage"];

    try {
        $sql = "UPDATE `cars` SET 
            `brand` = '$brand', 
            `car_type` = '$car_type', 
            `body_type` = '$body_type', 
            `fuel` = '$fuel', 
            `color` = '$color', 
            `cubic` = '$cubic', 
            `hp` = '$hp', 
            `mileage` = '$mileage' WHERE `id` = $update";

        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "New record created successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

?>