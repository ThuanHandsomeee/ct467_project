<?php
include_once __DIR__ . '/partial/header.php'
    ?>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="product.php">Product</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="about.php">About</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Hero End -->


<!-- Contact Info Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="contact-info-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-map-marker-alt fa-3x text-dark mb-4"></i>
                        <h5 class="text-white">Office Address</h5>
                        <h5 class="fw-light text-white">Ninh Kieu, Can Tho</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="contact-info-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-phone-alt fa-3x text-dark mb-4"></i>
                        <h5 class="text-white">Call Us</h5>
                        <h5 class="fw-light text-white">0909990090</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-item position-relative bg-primary text-center p-3">
                    <div class="border py-5 px-3">
                        <i class="fa fa-envelope fa-3x text-dark mb-4"></i>
                        <h5 class="text-white">Mail Us</h5>
                        <h5 class="fw-light text-white">minhquan@example.com</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center" style="max-width: 600px;">
            <h1 class="text-primary mb-5"><span class="fw-light text-dark">If You Have Any Query,</span> Please Contact
                Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7">
                <p class="mb-4">Email is a swift method for sending messages and data globally, used in both personal
                    and professional contexts. It facilitates efficient communication, enabling quick information
                    exchange across distances.</p>
                <div class="">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="title" placeholder="Title">
                                    <label for="title">Title</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8415184420396!2d105.76804037468601!3d10.029933690077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1699435717986!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php
include_once __DIR__ . '/partial/footer.php'
    ?>