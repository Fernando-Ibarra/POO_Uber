<?php
require_once('car.php');
require_once('uberX.php');
require_once('account.php');
require_once('uberVan.php');

    $uberX = new UberX("CVB123",new Account("Andrés Herrera", "AND456"), "Toyota", "Yaris");
    $uberX->printDataCar();

    $uberPool = new UberPool("TYU567",new Account("Andrés Ferrán", "AND765"), "Toyota", "Corolla");
    $uberPool->printDataCar();
?>