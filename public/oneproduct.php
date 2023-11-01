<?php
include_once __DIR__ .'/partial/header.php';

require_once __DIR__ ."/../model/product.php";
$id = $_GET['id'] ?? null;

if($id) {
    $product = getById($id);
}
?>
<div class="container-fluid bg-primary hero-header mb-5"></div>
<!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <?php
                echo '
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="'.$product['image'].'">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-primary mb-4">'.$product['name'].'</h1>
                    <p>'.$product['description'].'</p>
                    <a class="btn btn-primary py-2 px-4" href="">Add to cart</a>
                    <span class="text-primary fs-4 fw-bold px-1">$'.$product['price'].'</span>
                </div>
                '
                ?>
            </div>
        </div>
    </div>
<!-- About End -->
<?php
include_once __DIR__ .'/partial/footer.php'
?>