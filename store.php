<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    echo 'Only Post request are allowed';
    die();
}
// namespace Project;

//include_once "./App/Product.php";
include_once './vendor/autoload.php';


use Project\Controllers\Food;

$foodlist = new Food();
$foodlist->store($_POST);
header('location: index.php');
