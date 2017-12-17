<?php
$objCon = new mysqli("localhost", "kkjer_dk_portfolio", "Kalle300", "kkjer_dk_portfolio");
//$objCon = new mysqli("localhost", "root", "root", "produkt");
if ($objCon->connect_errno) {
    die('Kan ikke forbinde (' . $objCon->connect_errno . ')' . $objCon->connect_error);
}
$objCon->set_charset("utf8");
?>
