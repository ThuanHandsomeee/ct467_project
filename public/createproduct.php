<?php
include_once __DIR__ . '/partial/header.php';
use Project\models\ProductModel;

include __DIR__ . "/../vendor/autoload.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES["image"];
    $product = new ProductModel();
    $result = $product->createProduct($name, $price, $description, $image);
    if ($result) {
        header("Location: /public/product.php");
    }
}

?>
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Add Product</h1>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="col-lg-8 offset-lg-2">
            <div>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name">Product</label>
                            <input type="text" class="form-control" name="name" placeholder="Product Name">
                        </div>
                        <div class="col-md-6">
                            <label for="price">Product Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Product Price">
                        </div>
                        <div class="col-12">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Image">
                        </div>
                        <div class="col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" placeholder="Description" name="description"
                                style="height: 150px"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include_once __DIR__ . '/partial/footer.php'
    ?>