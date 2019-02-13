<?php

    // helpers
    $brand = $_GET["brand"];
    $car_type = $_GET["car_type"];
    $body_type = $_GET["body_type"];
    $fuel = $_GET["fuel"];

    try {
        $sql = "INSERT INTO `cars` (`brand`, `car_type`, `body_type`, `fuel`) VALUES ('$brand' , '$car_type', '$body_type', '$fuel')";

        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "New record created successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

?>