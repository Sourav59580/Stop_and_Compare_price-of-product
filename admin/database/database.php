<?php

$db = new mysqli("localhost","root","","pricedhakho");
 
if($db === false){
    die("ERROR: Could not connect. " . $db->connect_error);
}

?>