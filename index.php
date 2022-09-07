<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
</head>

<body>
<a href="create.php"><button>Create a Student</button></a>
    <?php
    session_start();
    $foodlist = $_SESSION['foodlist'] ?? [];
    //

    if (isset($_SESSION['massage'])) {
        echo $_SESSION['massage'];
        unset($_SESSION['massage']);
    }
    ?>

    <table border="1" style="width: 100%;">
        <tbody>
            <tr>
                <td>#</td>
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Action</td>
            </tr>
            <?php
            //if (isset($_SESSION['products'])) {
            //$products = $_SESSION['products'];
            $i = 1;
            foreach ($foodlist as $food) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $food['id'] ?></td>
                    <td><?= $food['name'] ?></td>
                    <td><?= $food['price'] ?></td>
                    <td>
                        <a href="show.php?id=<?= $food['id'] ?>"><button style="color: green;">Show</button></a>
                        <a href="edit.php?id=<?= $food['id'] ?>"><button style="color: blue;">Edit</button></a>
                        <a href="delete.php?id=<?= $food['id'] ?>"><button style="color:crimson;">Delete</button></a>
                    </td>
                </tr>
            <?php

            }
            //}
            ?>
        </tbody>

    </table>

</body>

</html>