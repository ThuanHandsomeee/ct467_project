<?php
include_once __DIR__ .'/partial/header.php';

require_once __DIR__ ."/../model/product.php";

$products=getAllProduct();
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="contact.php">Contact</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="createproduct.php">Add Product</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Natural</span> Hair Products</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-4">
            
                <?php 
                foreach ($products as $product) {
                    echo '<div class="product_box col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="product-item text-center border h-100 p-4">
                            <a href="editproduct.php?id='.$product['id'].'" class="button_edit text-light">Edit</a>
                            <a href="deleteproduct.php?id='.$product['id'].'" class="button_delete text-light ">Delete</a>
                            <img class="img_product img-fluid mb-4" src="'. $product['image'].'" alt="">
                            <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div>
                            <a href="oneproduct.php?id='.$product['id'].'" class="h6 d-inline-block mb-2">'. $product['name'].'</a>
                            <h5 class="text-primary mb-3">$'. $product['price'].'</h5>
                            <a href="shopnow.php" class="btn btn-outline-primary px-3">Buy Now</a>
                        </div>
                    </div>';
            }
                ?>
                <div class="col-12 text-center">
                    <a class="btn btn-primary py-2 px-4" href="">Load More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Let's Subscribe</span> The Newsletter</h1>
                <p class="text-white mb-4">Subscribe now to get 30% discount on any of our products</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Enter Your Email"
                            style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-white fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
<?php
include_once __DIR__ .'/partial/footer.php'
?>