<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
define('ROOT_URL', 'http://localhost/da_khoa_g37/');

// Check payment status
$payment_status = $_GET['resultCode']; // Assuming MoMo returns resultCode in query string
$appointment_data = $_SESSION['appointment_data'];

if ($payment_status == '0') {
    // Payment successful, insert data into the database
    $user_uuid = $appointment_data['user_uuid'];
    $doctor_uuid = $appointment_data['doctor_uuid'];
    $day_id = $appointment_data['day_id'];
    $shift_id = $appointment_data['shift_id'];
    $name = $appointment_data['name'];
    $email = $appointment_data['email'];
    $note = $appointment_data['note'];
    $datetime = $appointment_data['datetime'];

    if (!empty($user_uuid)) {
        $doctor_uuid_value = !empty($doctor_uuid) ? "'$doctor_uuid'" : "NULL";
        $insert_query = "INSERT INTO appointments (user_uuid, doctor_uuid, name, email, status, note, day_id, shift_id, created_at, updated_at)
                         VALUES ('$user_uuid', $doctor_uuid_value, '$name', '$email', '0', '$note', '$day_id', '$shift_id', '$datetime', '$datetime')";
    } else {
        $insert_query = "INSERT INTO appointments (name, email, status, note, day_id, shift_id, created_at, updated_at)
                         VALUES ('$name', '$email', '0', '$note', '$day_id', '$shift_id', '$datetime', '$datetime')";
    }

    if (mysqli_query($conn, $insert_query)) {
        $_SESSION['success'] = 3;
        $_SESSION['notification'] = 'Đặt lịch thành công';
    } else {
        $_SESSION['error'] = 'Đặt lịch thất bại';
    }
} else {
    $_SESSION['error'] = 'Thanh toán thất bại';
}

unset($_SESSION['appointment_data']);
header('Location: ' . ROOT_URL);
exit;
?>
