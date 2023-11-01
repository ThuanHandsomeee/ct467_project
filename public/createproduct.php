<?php
include_once __DIR__ .'/partial/header.php'
?>
<div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Add Product</h1>
        </div>
    </div>
<div class="container-fluid py-5">
        <div class="container">
            
                <div class="col-lg-8 offset-lg-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name">Product</label>
                                    <input type="text" class="form-control" id="name" placeholder="Product Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="price">Product Price</label>
                                    <input type="price" class="form-control" id="price" placeholder="Product Price">
                                </div>
                                <div class="col-12">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" placeholder="Image">
                                </div>
                                <div class="col-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" placeholder="Description" id="description" style="height: 150px"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Product</button>
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