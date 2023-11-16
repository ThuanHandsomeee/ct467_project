<?php
include_once __DIR__ . '/partial/header.php';

require_once __DIR__ . "/../models/account.php";
$loginFail = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $account = getUser($username);
    if (password_verify($password, $account['password'])) {

        unset($account['password']);
        $_SESSION['user'] = $account;

        header("Location: /public/");

    }
    $loginFail = true;
}
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Login</h1>
        <?php if ($loginFail)
            echo '<div class="alert alert-danger" role="alert">
                Tài khoản không tồn tại, hoặc mật khẩu sai!!!
            </div>' ?>


        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class=" row g-5 align-items-center justify-content-center">
                <form class="col-lg-6 " method="POST" action="">
                    <div class="row g-3 ">
                        <input type="hidden" name="userid" value="<?php
        ?>">
                    <div class="col-12">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div class="form__input-wrapper text-right d-flex justify-content-between">
                        <p>Do you have account?</p>
                        <a href="register.php" data-box="acc-recovery-box" class="btn-recovery acc-trigger js-acc">Sign
                            Up Now</a>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php
include_once __DIR__ . '/partial/footer.php'
    ?>