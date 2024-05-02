<?php 
$conn = mysqli_connect("localhost","root","","doantn") or die($conn);

// get back form data if there was a registration error
$first_name = $_SESSION['signup-data']['first_name'] ?? null;
$last_name = $_SESSION['signup-data']['last_name'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
$phone_number = $_SESSION['signup-data']['phone_number'] ?? null;
// delete signup data session
unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<section class="form-section">
        <div class="card">


<!-- Modal -->
<div class="modal fade" id="register-form" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Đăng ký</h5>
                
            </div>
            <div class="modal-body p-4">
                <form action="register_be.php" method="POST">

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email1">Địa chỉ Email</label><br>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="hidden" name="group" value="benh-nhan" >
                        
                    </div>
                    <!-- firstname input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="name2">Tên</label><br>
                    <input type="text" name="first_name" id="first_name" placeholder="Tên">
                        
                    </div>
                    <!-- lastname input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password2">Họ và tên đệm</label><br>
                    <input type="text" name="last_name" id="last_name" placeholder="Họ và tên đệm">
                        
                    </div>
                    <!-- password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password2">Mật Khẩu</label><br>
                    <input type="password" name="createpassword" id="password" placeholder="Mặt Khẩu">
                        
                    </div>
                    <!-- password-confirm input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password2">Nhập lại mật khẩu</label><br>
                    <input type="password" name="confirmpassword" id="password" placeholder="Xác nhận mật khẩu">
                        
                    </div>
                    <!-- gender input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password2">Giới tính</label><br>
                    <select name="gender" id="gender">
                        <option value="0">Nữ</option>
                        <option value="1">Nam</option>
                    </select>
                        
                    </div>
                    <!-- dob input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password2">Ngày tháng năm sinh</label><br>
                    <input type="date" name="dob" id="dob" placeholder="Ngày sinh">
                        
                    </div>
                    <!-- phone input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password2">Số điện thoại</label><br>
                    <input type="number" name="phone_number" id="phone_number" placeholder="Số điện thoại">
                        
                    </div>
                    

                    <!-- Submit button -->
                    <button id="submitBtn" name="submit" class="btn btn-primary btn-block blue-color">Đăng Ký</button>
                    <div class="btn-rg">
                    <p> Đã có tài khoản, quay lại <a href="" id="rg-form" data-toggle="modal" data-target="#login">Đăng Nhập</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

        </div>
    </section>

</body>
</html>