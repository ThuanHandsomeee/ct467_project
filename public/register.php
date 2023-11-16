<?php
include_once __DIR__ . '/partial/header.php';

require_once __DIR__ . "/../models/account.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userphone = $_POST['userphone'];
    $email = $_POST["email"];

    $result = createAccount($username, $password, $email, $userphone);
    if ($result) {
        header("Location: /public/login.php");
    }
}
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Register</h1>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class=" row g-5 align-items-center justify-content-center">
            <form id="form-register" class="col-lg-6 " method="POST" action="">
                <div class="row g-3 ">
                    <input type="hidden" name="userid" value="<?php
                    echo $userid
                        ?>">
                    <div class="col-md-6">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" name="username" placeholder="User Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="userphone number">Phone Number</label>
                        <input type="userphone number" class="form-control" name="userphone" placeholder="Phone Number"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-12">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" placeholder="Password"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Regiter Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- <script>
    form = document.querySelector('#form-register');
    form.addEventListener('submit', function (e) {
        password = form.querySelector('input[name="password"]').value;
        passwordConfirm = form.querySelector('input[name="confirm-password"]').value;
        if (password !== passwordConfirm) {
            e.preventDefault();
            alert("Mật khẩu không trùng khớp")
        }
    })
</script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    form = document.querySelector('#form-register');
    form.addEventListener('submit', function (e) {
        password = form.querySelector('input[name="password"]').value;
        passwordConfirm = form.querySelector('input[name="confirm-password"]').value;
        if (password !== passwordConfirm) {
            e.preventDefault();
            // Thay thế alert bằng SweetAlert
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Mật khẩu không trùng khớp!',
            });
        }
    })
</script>
<?php
include_once __DIR__ . '/partial/footer.php'
    ?>