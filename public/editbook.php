<?php
include_once __DIR__ . '/partial/header.php';


use Project\models\BookModel;

include __DIR__ . "/../vendor/autoload.php";

$id = $_GET['id'] ?? null;

$bookModel = new BookModel();
$editFailed = false;


if ($id) {


    $book = $bookModel->getById($id);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $image = null;
        if (isset ($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $image = $_FILES["image"];
        }
        $result = $bookModel->editBook($id, $name, $price, $quantity, $description, $image);
        if ($result) {
            header("Location:/");
        } else {
            $editFailed = true;
        }
    }

}




?>
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Edit Book</h1>
        <?php if ($editFailed)
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
                            <label for="name">Book Name</label>
                            <input class="form-control" name="name" value="<?php echo $book['name']
            ?>" placeholder="Book Name">
                        </div>
                        <div class="col-md-6">
                            <label for="price">Book Price</label>
                            <input type="number" class="form-control" name="price" value="<?php echo $book['price']
                                ?>" placeholder="Book Price">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="quantity" value="<?php echo $book['quantity']
                                ?>" placeholder="Quantity">
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="image" placeholder="Image">
                        </div>

                        <div class="col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" placeholder="Description" name="description"
                                style="height: 150px"><?php echo $book['description']
                                    ?></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Update Book</button>
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