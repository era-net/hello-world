<form method="get">
    <input type="number" name="zeit" id="zeit" name="zeit" value="0">
    <button type="submit">OK</button>
</form>
<?php

$uhrzeit = $_GET['zeit'];           // Zahl 0 - 23

if($uhrzeit <= 12 && $uhrzeit >= 6) {
    echo "Es ist Vormittag";
    // Zwischen 06 - 12
} else if($uhrzeit >= 12 && $uhrzeit <= 18) {
    echo "Es ist Nachmittag";
    // Zwischen 12 - 18
} else if($uhrzeit >= 18 && $uhrzeit <= 23) {
    echo "Es ist Abend";
    // Zwischen 18 - 23
} else if($uhrzeit >= 0 && $uhrzeit <= 6) {
    echo "Es ist Nacht";
    // Zwischen 23 - 06
} else {
    echo "Keine Eingabe";
}