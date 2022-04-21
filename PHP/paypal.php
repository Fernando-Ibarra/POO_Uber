<?php
require_once('payment.php');
class paypal extends Payment{
    public $email;

    public function __construct($id, $email){
        parent::__construct($id);
        $this->email = $email;
}
?>