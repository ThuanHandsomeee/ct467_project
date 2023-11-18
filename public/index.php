<?php
use Project\models\ProductModel;

include_once __DIR__ . '/partial/header.php';

require_once __DIR__ . "/../models/ProductModel.php";
$page = $_GET['page'] ?? 1;
$product = new ProductModel;
$products = $product->getAllProduct($page);
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="fw-light text-white">Natural & Organic</h3>
                <h1 class="display-4 text-white">Hair <span class="fw-light text-dark">Shampoo</span> For
                    Healthy Hair</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Etiam feugiat rutrum lectus, sed auctor ex malesuada id. Orci varius natoque penatibus et
                    magnis dis parturient montes.</p>
                <a href="product.php" class="btn btn-dark py-2 px-4 me-3">Buy Now</a>
                <a href="contact.php" class="btn btn-outline-dark py-2 px-4">Contact Us</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid pulse infinite" src="img/shampoo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Feature Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="feature-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-leaf fa-3x text-dark mb-4"></i>
                        <h5 class="text-white mb-0">100% Natural</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-tint-slash fa-3x text-dark mb-4"></i>
                        <h5 class="text-white mb-0">Anti Hair Fall</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-times fa-3x text-dark mb-4"></i>
                        <h5 class="text-white mb-0">Hypoallergenic</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid pulse infinite" src="img/shampoo-1.png">
            </div>
            <div class="col-lg-6">
                <h1 class="text-primary mb-4">Healthy Hair <span class="fw-light text-dark">Is A Symbol Of Our
                        Beauty</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non
                    malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent
                    tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est.</p>
                <p class="mb-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                    labore lorem sit. Sanctus clita duo justo et tempor.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Deal Start -->
<div class="container-fluid deal bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid pulse infinite" src="img/shampoo-2.png">
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center p-4">
                    <div class="border p-4">
                        <p class="mb-2">Natural & Organic Shampoo</p>
                        <h2 class="fw-bold text-uppercase mb-4">Deals of the Day</h2>
                        <h1 class="display-4 text-primary mb-4 text-decoration-line-through">$19.99</h1>
                        <h1 class="display-4 text-primary mb-4">$9.99</h1>
                        <h5>Fresh Organic Shampoo</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Etiam feugiat rutrum lectus sed auctor.</p>
                        <div class="row g-0 cdt mb-4">
                            <div class="col-3">
                                <h1 class="display-6" id="cdt-days"></h1>
                            </div>
                            <div class="col-3">
                                <h1 class="display-6" id="cdt-hours"></h1>
                            </div>
                            <div class="col-3">
                                <h1 class="display-6" id="cdt-minutes"></h1>
                            </div>
                            <div class="col-3">
                                <h1 class="display-6" id="cdt-seconds"></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal End -->


<!-- Feature Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center" style="max-width: 600px;">
            <h1 class="text-primary mb-3"><span class="fw-light text-dark">Best Benefits Of Our</span> Natural Hair
                Shampoo</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                consequat, nibh erat tempus risus.</p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 d-flex">
                        <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5>Natural & Organic</h5>
                            <hr class="w-25 bg-primary my-2">
                            <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5>Anti Hair Fall</h5>
                            <hr class="w-25 bg-primary my-2">
                            <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5>Anti-dandruff</h5>
                            <hr class="w-25 bg-primary my-2">
                            <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="img-fluid pulse infinite" src="img/shampoo.png">
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 d-flex">
                        <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5>No Internal Side Effect</h5>
                            <hr class="w-25 bg-primary my-2">
                            <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5>No Skin Irritation</h5>
                            <hr class="w-25 bg-primary my-2">
                            <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5>No Artificial Smell</h5>
                            <hr class="w-25 bg-primary my-2">
                            <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- How To Use Start -->
<div class="container-fluid how-to-use bg-primary my-5 py-5">
    <div class="container text-white py-5">
        <div class="mx-auto text-center" style="max-width: 600px;">
            <h1 class="text-white mb-3"><span class="fw-light text-dark">How To Use Our</span> Natural & Organic
                <span class="fw-light text-dark">Hair Shampoo</span>
            </h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                consequat, nibh erat tempus risus.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 text-center">
                <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                    <i class="fa fa-home fa-3x text-dark"></i>
                </div>
                <h5 class="text-white">Wash Hair With Water</h5>
                <hr class="w-25 bg-light my-2 mx-auto">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                    consequat.</span>
            </div>
            <div class="col-lg-4 text-center">
                <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                    <i class="fa fa-home fa-3x text-dark"></i>
                </div>
                <h5 class="text-white">Apply Shampoo On Hair</h5>
                <hr class="w-25 bg-light my-2 mx-auto">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                    consequat.</span>
            </div>
            <div class="col-lg-4 text-center">
                <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                    <i class="fa fa-home fa-3x text-dark"></i>
                </div>
                <h5 class="text-white">Wait 5 Mins And Wash</h5>
                <hr class="w-25 bg-light my-2 mx-auto">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                    consequat.</span>
            </div>
        </div>
    </div>
</div>
<!-- How To Use End -->


<!-- Product Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center" style="max-width: 600px;">
            <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our Natural</span> Hair Products</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada
                consequat, nibh erat tempus risus.</p>
        </div>
        <div class="row g-4">

            <?php
            foreach ($products as $product) {
                echo '<div class="product_box col-md-6 col-lg-3">
                        <div class="product-item text-center border h-100 p-4">
                            <a href="editproduct.php?id=' . $product['product_id'] . '" class="button_edit text-light">Edit</a>
                            <a href="deleteproduct.php?id=' . $product['product_id'] . '" class="button_delete text-light ">Delete</a>
                            <img class="img_product img-fluid mb-4" src="' . $product['image'] . '" alt="">
                            <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div>
                            <a href="oneproduct.php?id=' . $product['product_id'] . '" class="h6 d-inline-block mb-2">' . $product['name'] . '</a>
                            <h5 class="text-primary mb-3">$' . $product['price'] . '</h5>
                            <a href="shopnow.php" class="btn btn-outline-primary px-3">Buy Now</a>
                        </div>
                    </div>';
            }
            ?>

        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary py-2 px-4 mt-2" href="product.php">More Product</a>
        </div>
    </div>
</div>
<!-- Product End -->




<?php
include_once __DIR__ . '/partial/footer.php'
    ?>