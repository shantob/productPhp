<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Food Produce</title>
</head>

<body>
<?php
// $id = $_GET['id'];
// echo $id;
include_once './vendor/autoload.php';


use Project\Controllers\Food;

$foodlist = new Food();
$foodInfo = $foodlist->edit($_GET['id']);
?>
    <h2>Edit Food Product</h2>
    <div class="class" style="width: 500px; margin:0 auto;">
        <form action="./update.php" method="post">
            <input type="number" name="id" value="<?= $foodInfo['id'] ?>" placeholder="Endter Product Id">
            <input type="text" name="name"  value="<?= $foodInfo['name'] ?>" placeholder="Endter Product Name">
            <input type="text" name="price" value="<?= $foodInfo['price'] ?>" placeholder="Endter Product Price">
            <button>Edit Product</button>
            <button disabled>Cancle</button>
        </form>
    </div>
</body>

</html>