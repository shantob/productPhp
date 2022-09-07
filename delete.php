<?php
// $id = $_GET['id'];
// echo $id;
include_once './vendor/autoload.php';


use Project\Controllers\Food;

$foodlist = new Food();
$foodlist->destroy($_GET['id']);
header('location: index.php');
