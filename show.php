<?php
// $id = $_GET['id'];
// echo $id;
include_once './vendor/autoload.php';


use Project\Controllers\Food;

$foodlist = new Food();
$foodInfo = $foodlist->show($_GET['id']);
//print_r($foodInfo);
//header('location: index.php');
?>
<h2>Food Information</h2>
<hr>
<h4>The Id Of The Food Products is - <?=$foodInfo['id'] ?></h4>
<h4>The Id Of The Name Products is - <?=$foodInfo['name'] ?></h4>
<h4>The Id Of The Price Products is - <?=$foodInfo['price'] ?></h4>
