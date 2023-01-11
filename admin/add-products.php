<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin add product</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group col-6">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Product Name">
                            </div>
                            <div class="form-group col-6">
                                <label>Description</label>
                                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group col-6">
                                <label>Image</label>
                                <input name="image" type="file" />
                            </div>
                            <div class="form-group col-6">
                                <label>Price</label>
                                <input class="form-control" name="price" type="number" min="0" />
                            </div>
                            <div class="form-group col-6">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <?php
                                    foreach ($categories as $category) {
                                        echo '<option value="' . $category['id'] . '"' . (isset($values['category_id']) && $values['category_id'] == $category['id'] ? 'selected' : '') . '>' . $category['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Size</label>
                                <select name="category_id" class="form-control">
                                    <?php
                                    foreach ($sizes as $size) {
                                        echo '<option value="' . $size['id'] . '"' . (isset($values['size_id']) && $values['size_id'] == $size['id'] ? 'selected' : '') . '>' . $size['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Size</label>
                                <select name="category_id" class="form-control">
                                    <?php
                                    foreach ($colors as $color) {
                                        echo '<option value="' . $color['id'] . '"' . (isset($values['color']) && $values['color_id'] == $color['id'] ? 'selected' : '') . '>' . $color['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group form-check form-group col-6">
                                <input type="checkbox">
                                <label class="form-check-label" for="exampleCheck1">Recent</label>
                                <input type="checkbox">
                                <label class="form-check-label" for="exampleCheck1">Featured</label>
                            </div>
                            <a href="products.php" class="btn btn-success">ADD</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>