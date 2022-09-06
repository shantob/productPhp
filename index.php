<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
</head>

<body>
    <?php
    session_start();
    //include_once "store.php";
    $products = $_SESSION['products'];
    ?>
    <div class="class" style="width: 500px; margin:0 auto;">
        <form action="./store.php" method="post">
            <input type="number" name="id" placeholder="Endter Product Id">
            <input type="text" name="name" placeholder="Endter Product Name">
            <input type="text" name="price" placeholder="Endter Product Price">
            <button>ADD Product</button>
        </form>
        <table border="1" style="width: 100%;">
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td colspan="2">Action</td>
                </tr>
                <?php
                foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td style="color: blue;">Edit</td>
                        <td style="color: red;">Delete</td>
                    </tr>
                <?php
                }

                ?>
            </tbody>

        </table>
    </div>
</body>

</html>