<?php
define('BASE_PATH', '../');
require_once('../logic/products.php');
$products = getProducts();

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel Products</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-success" href="./add-product.php">Add</a>
                    <table class="table table-bordered table-striped text-center ">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th scope>Description</th>
                                <th scope>Recent</th>
                                <th scope>Featured</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($products as $product) {
                                ?>
                                <tr>
                                    <td><?= $product['id'] ?></td>
                                    <td><?= $product['name'] ?></td>
                                    <td><img src="../<?=$product['image_url']?>"width="200px"/></td>
                                    <td><?= $product['category_id'] ?></td>
                                    <td><?= $product['price'] ?></td>
                                    <td><?= $product['discount']*100 ?>%</td>
                                    <td><?= $product['description'] ?></td>
                                    <td><?= $product['is_recent']?"yes": "no" ?></td>
                                    <td><?= $product['is_featured']?"yes": "no" ?></td>
                                    <td scope="col"><button class="btn btn-danger">DELETE</button></td>
                                    <td scope="col"><button class="btn btn-success">EDIT</button></td>
                                </tr><?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>