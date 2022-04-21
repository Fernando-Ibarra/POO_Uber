<?php
require_once('payment.php');
class efectivo extends Payment{

    public function __construct($id){
        parent::__construct($id);
    }
}
?>