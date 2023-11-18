<?php
include_once __DIR__ . '/partial/header.php';
use Project\models\ProductModel;

include __DIR__ . "/../vendor/autoload.php";
$id = $_GET['product_id'] ?? null;
$product = new ProductModel();
if ($id) {
    $product = $product->getById($id);
}
?>
<div class="container-fluid bg-primary hero-header mb-5"></div>
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <?php
            echo '
                <div class="col-lg-6">
                    <img class="img-fluid pulse infinite" src="' . $product['image'] . '">
                </div>
                <div class="col-lg-6">
                    <h1 class="text-primary mb-4">' . $product['name'] . '</h1>
                    <p>' . $product['description'] . '</p>
                    <a class="btn btn-primary py-2 px-4" href="shopnow.php?product_id=' . $product['product_id'] . '">Buy Now</a>
                    <span class="text-primary fs-4 fw-bold px-1">$' . $product['price'] . '</span>
                </div>
                '
                ?>
        </div>
    </div>
</div>
<!-- About End -->
<?php
include_once __DIR__ . '/partial/footer.php'
    ?>