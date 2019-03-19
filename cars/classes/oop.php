<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <?php

    require 'AutoController.php';

    $audi = new AutoController;
    $audi->setBauart('Kombi');
    $audi->setHubraum(2000);
    $audi->setPs(183);
    $audi->setKraftstoff('Diesel');
    $audi->setFarbe('schwarz');
    $audi->setKmstand(120565);
    $audi->setErsatzwagen(1);
    $audi->setBetankungen();
    $audi->saveData();
    $audi->showData();

    $bmw = new AutoController;
    $bmw->setBauart('Coupe');
    $bmw->setHubraum(3300);
    $bmw->setPs(280);
    $bmw->setKraftstoff('Super');
    $bmw->setFarbe('weiss');
    $bmw->setKmstand(80906);
    $bmw->setErsatzwagen(0);
    $bmw->setBetankungen();
    $bmw->saveData();
    $bmw->showData();

?>
</body>
</html>