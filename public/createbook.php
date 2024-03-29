<?php
include_once __DIR__ . '/partial/header.php';
use Project\models\BookModel;
$createFaled = false;
include __DIR__ . "/../vendor/autoload.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && $user != null) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES["image"];
    $quantity = $_POST['quantity'];
    $book = new BookModel();
    $result = $book->createBook($name, $price, $quantity,  $description, $image, $user["id"]);
    if ($result) {
        header("Location: /");
    }
    else {
        $createFaled = true;
    }

}

?>
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Add Book</h1>
        <?php if ($createFaled)
            echo '<div class="alert alert-danger" role="alert">
                Đã có lỗi xảy ra!!!
            </div>' ?>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="col-lg-8 offset-lg-2">
            <div>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name">Book</label>
                            <input type="text" class="form-control" name="name" placeholder="Book Name">
                        </div>
                        <div class="col-md-6">
                            <label for="price">Book Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Book Price">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="quantity" placeholder="Quantity">
                        </div>
                        <div class="col-md-6">

                            <input type="file" class="form-control" name="image" placeholder="Image">
                        </div>
                        <div class="col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" placeholder="Description" name="description"
                                style="height: 150px"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Add Book</button>
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