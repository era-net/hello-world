<?php

    // If we do INSERT or UPDATE
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // helpers
        $brand = $_POST["brand"];
        $car_type = $_POST["car_type"];
        $body_type = $_POST["body_type"];
        $fuel = $_POST["fuel"];
        $color = $_POST["color"];
        $cubic = $_POST["cubic"];
        $hp = $_POST["hp"];
        $mileage = $_POST["mileage"];

        
        if (!empty($brand) && !empty($car_type) && !empty($body_type) && !empty($fuel)) 
        {
            //

            require "nconnect.php";

            try {
                $sql = "INSERT INTO `cars` 
                    (`brand`, `car_type`, `body_type`, `fuel`, `color`, `cubic`, `hp`, `mileage`) VALUES 
                    ('$brand' , '$car_type', '$body_type', '$fuel', '$color', '$cubic', '$hp', '$mileage')";

                $conn->exec($sql);

                // Set HTTP Response Code to 200 = OK
                http_response_code(200);
                echo "New record created successfully";

                }
            catch(PDOException $e)
                {

                // Set HTTP Response Code to 400 = Bad Request
                http_response_code(400);
                echo "Connection failed: " . $e->getMessage();
            }

            //

        }
    }

    // If we do READ
    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        require "nconnect.php";

        try {

            // get all cars from database
            $stmt = $conn->prepare("SELECT * FROM cars ORDER BY updated DESC"); 
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $cars = $stmt->fetchAll();

            // Set HTTP Response Code to 200 = OK
            http_response_code(200);
            echo json_encode($cars);

            }
        catch(PDOException $e)
            {

            // Set HTTP Response Code to 400 = Bad Request
            http_response_code(400);
            echo "Connection failed: " . $e->getMessage();
        }
    }
