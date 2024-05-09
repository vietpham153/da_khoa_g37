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
    // Nếu đã đăng nhập, thêm dữ liệu vào bảng appointments với user_uuid là uuid của người dùng đó
    //INSERT INTO appointments (user_uuid, doctor_uuid, name, email, status, 
    //note, day_id, shift_id, created_at, updated_at)
    //VALUES ('10d7e200-09f2-11ef-8700-842afd4a598a', '167623b7-09f2-11ef-8700-842afd4a598a', 'Ngô Công Hoàng', 'ngoconghoang1@gmail.com', '0', 'ngày 07-09-2024', '3', '5', '2024-07-07 12:12:12', '2024-07-07 12:12:12')
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
} else {
    // Nếu chưa đăng nhập, thêm dữ liệu vào bảng appointments với user_uuid là NULL
    $insert_appointments = "INSERT INTO appointments (name, email, status, 
                                note, day_id, shift_id, created_at, updated_at)
                                VALUES ('$name', '$email', '0', '$note', '$day_id', '$shift_id', '$datetime', '$datetime')";
    $insert_appointments_result = mysqli_query($conn, $insert_appointments);

    // Kiểm tra xem câu truy vấn đã thành công hay không
    header('location: ' . ROOT_URL);
}
