<?php
use Project\models\ProductModel;

include_once __DIR__ . '/partial/header.php';

require_once __DIR__ . "/../models/ProductModel.php";
require_once __DIR__ . "/../models/Order.php";
$page = $_GET['page'] ?? 1;
$order = new Order();
$product = new ProductModel;
$products = $product->getAllProduct($page);

$idproduct = $_GET["id"];
$product = $product->getById($idproduct);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idproduct = $_POST["idproduct"];
    $namecus = $_POST['namecus'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $result = $order->buyProduct($idproduct, $namecus, $address, $phone);
    if ($result) {
        header("Location: /public/index.php");
    }
}

?>
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3 animated slideInDown">Payment</h1>
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
                                <img class="img-fluid animated pulse infinite" src="' . $product['image'] . '">
                                </div>
                                <div class="col-lg-6 ">
                                <h1 class="text-primary mb-4">' . $product['name'] . '</h1>
                                <p>' . $product['description'] . '</p>
                                
                                <span id="price" class="text-primary fs-4 fw-bold px-1">$' . $product['price'] . '</span>
                                </div>'
                                ?>
                        </div>
                    </div>
                </div>
                <form class="col-lg-6 " method="POST" action="">
                    <div class="row g-3">
                        <input type="hidden" name="idproduct" value="<?php
                        echo $idproduct
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
                            <input id="inputquantity" type="number" class="col-md-1 text-center" min="1" value="1"
                                required>

                            <h4 id="total"></h4>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Buy Now</button>
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

    inputquantity.addEventListener('change', function (e) {
        total.innerHTML = `Total price: $${inputquantity.value * priceValue}`;
    })
</script>