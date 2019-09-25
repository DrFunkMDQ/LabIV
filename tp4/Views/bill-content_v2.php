<?php
    require_once("../Config/Autoload.php");
    use Repositories\BillRepository as Bill;

    $bill = new Bill();
    $bill->salutation();

?>