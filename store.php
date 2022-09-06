<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "Only Post Request Allwed Here";
    die();
}
//include_once "./App/Product.php";
include_once './vendor/autoload.php';
use Project\Product;

$product = new Product();

$product->store($_POST);
