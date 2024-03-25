<?php
include_once __DIR__ . '/partial/header.php';
use Project\models\BookModel;

include __DIR__ . "/../vendor/autoload.php";
$id = $_GET['id'] ?? null;
$book = new BookModel();
if ($id) {
    $book = $book->getById($id);
}
?>
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Book Details</h1>
    </div>
</div>
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <?php
            echo '
                <div class="col-lg-6">
                   <div class="box-img"> <img class="img-fluid pulse infinite" src="' . $book['image'] . '"></div>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-primary mb-4">' . $book['name'] . '</h1>
                    <p class="mb-4">' . $book['description'] . '</p>
                    <a class="btn btn-primary py-2 px-4" href="shopnow.php?id=' . $book['id'] . '">Buy Now</a>
                    <span class="text-primary fs-4 fw-bold px-1">$' . $book['price'] . '</span>
                </div>
                '
                ?>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/partial/footer.php'
    ?>