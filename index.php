<?php
require __DIR__ . '/vendor/autoload.php';
use App\Data\Database;

$obj  = new Database();

echo $obj->sayHi();
?>
