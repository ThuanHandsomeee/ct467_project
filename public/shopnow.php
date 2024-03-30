<?php
use Project\models\BookModel;

include_once __DIR__ . '/partial/header.php';

require_once __DIR__ . "/../models/BookModel.php";
require_once __DIR__ . "/../models/OrderModel.php";
$page = $_GET['page'] ?? 1;
$order = new Order();
$bookModel= new BookModel;

$bookId= $_GET["id"];
$book= $bookModel->getById($bookId);

$orderFailed = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookId= $_POST["id"];
    $namecus = $_POST['namecus'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $result = false;
    if($user) {
        $result = $order->borrowBook($bookId, $namecus, $address, $phone, $user["id"]);
    }
    else {
        $result = $order->borrowBook($bookId, $namecus, $address, $phone);
    }
    
    if ($result) {
        header("Location: /");
    }
    else {
        $orderFailed = true;
    }
}

?>
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Borrow Book</h1>
        <?php if ($orderFailed)
            echo '<div class="alert alert-danger" role="alert">
                Đã có lỗi xảy ra!!!
            </div>' ?>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">

        <div class=" ">
            <div class=" row g-5 align-items-center">
                <div class="py-5 col-lg-6 ">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <?php
                            echo '
                                <div class="col-lg-6 ">
                                <img class="img-fluid pulse infinite" src="' . $book['image'] . '">
                                </div>
                                <div class="col-lg-6 ">
                                <h1 class="text-primary mb-4">' . $book['name'] . '</h1>
                                <p>' . $book['description'] . '</p>
                                
                                <span id="price" class="text-primary fs-4 fw-bold px-1">$' . $book['price'] . '</span>
                                </div>'
                                ?>
                        </div>
                    </div>
                </div>
                <form class="col-lg-6 " method="POST" action="">
                    <div class="row g-3">
                        <input type="hidden" name="id" value="<?php
                        echo $bookId
                            ?>">
                        <div class="col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="namecus" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone number">Phone Number</label>
                            <input type="phone number" class="form-control" name="phone" placeholder="Phone Number"
                                required>
                        </div>
                        <div class="col-12">
                            <label for="address">Address</label>
                            <input type="Address" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div>
                            <input id="inputquantity" type="number" name="quantity" class="col-md-1 text-center" min="1"
                                value="1" required>

                            <h4 id="total"></h4>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Borrow Now</button>
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

<script>
const price = document.querySelector('#price').innerText;
const inputquantity = document.querySelector('#inputquantity');
const total = document.querySelector('#total');
const priceValue = price.replace("$", "");
total.innerHTML = `Total price: $${inputquantity.value * priceValue}`;

inputquantity.addEventListener('change', function(e) {
    total.innerHTML = `Total price: $${inputquantity.value * priceValue}`;
})
</script>