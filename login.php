<?php 
$conn = mysqli_connect("localhost","root","","doantn") or die($conn);
define('ROOT_URL', 'http://localhost/da_khoa_g37/');
// get back form data if there was a log in error
$email = $_SESSION['signin-data']['email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>
    <section class="form-section">
        <div class="card">
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Đăng nhập</h5>
            </div>
            <div class="modal-body p-4">
                <form action="login_be.php" method="POST">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="email1">Email</label>
                        <input type="email" name="email" id="email1" class="form-control" />
                    </div>

                    <!-- password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="password1">Mật khẩu</label>
                        <input type="password" name="password" id="password1" class="form-control" />
                    </div>

                    <!-- Submit button -->
                    
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                <div class="btn-rg">
                    <a href="" id="rg-form" data-toggle="modal" data-target="#register-form">Đăng ký</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

            <!-- <div class="email-login">
                <label for="email">
                    <b>Email</b>
                </label>
                <input type="text" name="email">
                <label for="password">
                    <b>Password</b>
                </label>
            </div> -->
        </div>
    </section>

