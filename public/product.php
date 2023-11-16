<?php
include_once __DIR__ . '/partial/header.php';
use Project\models\ProductModel;

include __DIR__ . "/../vendor/autoload.php";
$page = $_GET['page'] ?? 1;
$product = new ProductModel();
$products = $product->getAllProduct($page);
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Products</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="contact.php">Contact</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="about.php">About Us</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Hero End -->


<!-- Product Start -->

<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center" style="max-width: 600px;">
            <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Natural</span> Hair Products</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                consequat, nibh erat tempus risus.</p>
        </div>
        <a href="createproduct.php" class="btn btn-primary float-right mb-3">Add Product</a>
        <div class="row g-4">

            <?php
            foreach ($products as $product) {
                echo '<div class="product_box col-md-6 col-lg-3" >
                        <div class="product-item text-center border h-100 p-4 ">
                            <a href="editproduct.php?id=' . $product['id'] . '" class="button_edit text-light">Edit</a>
                            <a href="deleteproduct.php?id=' . $product['id'] . '" class="button_delete text-light ">Delete</a>
                            <img class="img_product img-fluid mb-4" src="' . $product['image'] . '" alt="">
                            <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div>
                            <a href="oneproduct.php?id=' . $product['id'] . '" class="h6 d-inline-block mb-2">' . $product['name'] . '</a>
                            <h5 class="text-primary mb-3">$' . $product['price'] . '</h5>
                            <a href="shopnow.php?id=' . $product['id'] . '" class="btn btn-outline-primary px-3">Buy Now</a>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </div>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        <ul class="pagination mt-2">
            <li class="page-item"><a class="page-link" href="?page=<?php
            if ($page > 1) {
                echo $page - 1;
            } else {
                echo $page;
            }
            ?>">Previous</a></li>
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
            <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
            <li class="page-item"><a class="page-link" href="?page=<?php
            if ($page < 3) {
                echo $page + 1;
            } else {
                echo $page;
            }
            ?>">Next</a></li>
        </ul>
    </nav>
</div>
<!-- Product End -->



<?php
include_once __DIR__ . '/partial/footer.php'
    ?>