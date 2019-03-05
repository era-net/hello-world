
<?php


    try {
        // get all cars from database
        $stmt = $conn->prepare("SELECT * FROM cars ORDER BY updated DESC"); 
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $cars = $stmt->fetchAll();

        //var_dump($_GET);

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
                    <th></th>
                </tr>
            </thead>
            <tbody>";
        foreach ($cars as $key => $value) {
            echo "<tr>
                    <td class='align-middle'>".$value["brand"]."</td>
                    <td class='align-middle'>".$value["car_type"]."</td>
                    <td class='align-middle'>".$value["body_type"]."</td>
                    <td class='align-middle'>".$value["fuel"]."</td>
                    <td class='align-middle'>".$value["color"]."</td>
                    <td class='align-middle'>".$value["cubic"]."</td>
                    <td class='align-middle'>".$value["hp"]."</td>
                    <td class='align-middle'>".$value["mileage"]."</td>
                    <td class='align-middle'>".$value["updated"]."</td>
                    <td class='text-right align-middle'>
                        <form>
                            <button type='submit' name='edit' class='btn btn-primary' value='".$value["id"]."'>
                                <i class='fa fa-pencil'></i>
                            </button>                        
                            <button type='submit' name='delete' class='btn btn-danger' value='".$value["id"]."'>
                                <i class='fa fa-trash-o'></i>
                            </button>
                        </form>
                    </td>
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