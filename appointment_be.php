<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
define('ROOT_URL', 'http://localhost/da_khoa_g37/');

// get Sign up form data if sign up button was clicked

$user_uuid = !empty($_SESSION['uuid']) ? $_SESSION['uuid'] : NULL;
$doctor_uuid = !empty($_POST['doctor_uuid']) ? $_POST['doctor_uuid'] : NULL;
$day_id = $_POST['day_id'];
$shift_id = $_POST['shift_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$note = $_POST['note'];
$datetime = date('Y-m-d H:i:s');


// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!empty($_SESSION['uuid'])) {
// Kiểm tra xem $doctor_uuid có được chọn không
    if (isset($doctor_uuid) && !empty($doctor_uuid)) {
        $doctor_uuid_value = "'$doctor_uuid'";
    } else {
        $doctor_uuid_value = "NULL";
    }

    // Tạo câu truy vấn INSERT
    $insert_appointments_full = "INSERT INTO appointments (user_uuid, doctor_uuid, name, email, status, note, day_id, shift_id, created_at, updated_at)
VALUES ('$user_uuid', $doctor_uuid_value, '$name', '$email', '0', '$note', '$day_id', '$shift_id', '$datetime', '$datetime')";

    $insert_appointments_full_result = mysqli_query($conn, $insert_appointments_full);

    // Kiểm tra xem câu truy vấn đã thành công hay không
    header('location: ' . ROOT_URL);
    $_SESSION['success'] = 3;
                $_SESSION['notification'] = 'Đặt lịch thành công';
} else {
    // Nếu chưa đăng nhập, thêm dữ liệu vào bảng appointments với user_uuid là NULL
    $insert_appointments = "INSERT INTO appointments (name, email, status, 
                                note, day_id, shift_id, created_at, updated_at)
                                VALUES ('$name', '$email', '0', '$note', '$day_id', '$shift_id', '$datetime', '$datetime')";
    $insert_appointments_result = mysqli_query($conn, $insert_appointments);

    // Kiểm tra xem câu truy vấn đã thành công hay không
    header('location: ' . ROOT_URL);
    $_SESSION['success'] = 3;
                $_SESSION['notification'] = 'Đặt lịch thành công';
}
