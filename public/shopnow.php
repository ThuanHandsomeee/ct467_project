<?php
include_once __DIR__ .'/partial/header.php'
?>
<div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Payment</h1>
        </div>
    </div>
<div class="container-fluid py-5">
        <div class="container">
            
                <div class="col-lg-8 offset-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone number">Phone Number</label>
                                    <input type="phone number" class="form-control" id="phone number" placeholder="Phone Number">
                                </div>
                                <div class="col-12">
                                    <label for="address">Address</label>
                                    <input type="Address" class="form-control" id="address" placeholder="Address">
                                </div>
                                <div >
                                    <input type="number" class="col-md-1 text-center" class="form-control" require>
                                    <h4>Total Price:</h4>
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
include_once __DIR__ .'/partial/footer.php'
?>

<script>
    const price = document.querySelector('#price').innerText;
    const inputquantity = document.querySelector('#inputquantity');
    const total = document.querySelector('#total');

    total.innerHTML = `Total: ${inputquantity.value * price}`;

    inputquantity.addEventListener('change', function(e) {
        total.innerHTML = `Total: ${inputquantity.value * price}`;
    })
</script>