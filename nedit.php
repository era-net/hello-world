
<?php
    
    $edit = $_GET['edit'];

    try {
        // get one car from database
        $stmt = $conn->prepare("SELECT * FROM `cars` WHERE `id` = $edit"); 
        $stmt->execute();
        $car = $stmt->fetch();

        //print_r($car);

        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

?>