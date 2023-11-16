<?php
use Project\models\ProductModel;

include __DIR__ . "/../vendor/autoload.php";
$id = $_GET['id'] ?? null;
$product = new ProductModel();
if ($id) {
    $result = $product->deleteProduct($id);
    if ($result) {
        header("Location: /public/product.php");
    }
}
echo "Delete fail"
    ?>