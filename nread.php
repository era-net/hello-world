<?php

    try {
        // get all cars from database
        $stmt = $conn->prepare("SELECT * FROM cars"); 
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $cars = $stmt->fetchAll();

        //var_dump($cars);

        echo "<table class='table table-striped table-bordered table-hover'>";
        echo "<thead>
                <tr>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Body type</th>
                    <th>Fuel</th>
                    <th>Color</th>
                    <th>Cubic</th>
                    <th>HP</th>
                    <th>Mileage</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>";
        foreach ($cars as $key => $value) {
            echo "<tr>
                    <td>".$value["brand"]."</td>
                    <td>".$value["car_type"]."</td>
                    <td>".$value["body_type"]."</td>
                    <td>".$value["fuel"]."</td>
                    <td>".$value["color"]."</td>
                    <td>".$value["cubic"]."</td>
                    <td>".$value["hp"]."</td>
                    <td>".$value["mileage"]."</td>
                    <td>".$value["updated"]."</td>
                </tr>";
        }

        echo "</tbody>
        </table>";

        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

?>