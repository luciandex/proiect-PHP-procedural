<?php

define("ROOT_PATH", __DIR__ . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . "config/const.php";
require_once ROOT_PATH . "config/db.php";

$config = [
    "db" => require ROOT_PATH."config/db.php"
];

require_once ROOT_PATH . "lib/functions.php";

$conn = mysqli_connect(
    $config['db']['host'],
    $config['db']['user'],
    $config['db']['pass'],
    $config['db']['db'],
    $config['db']['port']
);

if(!$conn){
    echo "Error: ". mysqli_connect_error();
    exit; // or redirect to maintenance page
}

session_start(); // == $_SESSION