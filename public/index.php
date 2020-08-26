<?php

use Medoo\Medoo;
require_once '../vendor/autoload.php';
require '../vendor/catfan/medoo/src/Medoo.php';

echo "Hello World";

$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);

?>