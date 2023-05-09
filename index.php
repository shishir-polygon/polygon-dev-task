<?php
require_once 'fullName.php';
use FullName\fullName as name;
$firstName = $_GET['firstName'] ?? 'TR';
$lastName = $_GET['lastName'] ?? 'Shishir';

try {
    $name = new name($firstName, $lastName);
    print($name->getFullName());
}catch (TypeError $e){
    echo 'Error: ' . $e->getMessage();
}
