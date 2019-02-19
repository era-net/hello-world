<?php

    // helpers
    $delete = $_GET["delete"];

    try {
        $sql = "DELETE FROM `cars` WHERE `id` = $delete";

        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "Record deleted successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
    }

?>