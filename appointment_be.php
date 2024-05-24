<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
define('ROOT_URL', 'http://localhost/da_khoa_g37/');

// Collect appointment data
$user_uuid = !empty($_SESSION['uuid']) ? $_SESSION['uuid'] : NULL;
$doctor_uuid = !empty($_POST['doctor_uuid']) ? $_POST['doctor_uuid'] : NULL;
$day_id = $_POST['day_id'];
$shift_id = $_POST['shift_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$note = $_POST['note'];
$datetime = date('Y-m-d H:i:s');

// Save data to session
$_SESSION['appointment_data'] = [
    'user_uuid' => $user_uuid,
    'doctor_uuid' => $doctor_uuid,
    'day_id' => $day_id,
    'shift_id' => $shift_id,
    'name' => $name,
    'email' => $email,
    'note' => $note,
    'datetime' => $datetime
];

// Redirect to payment
header('Location: momoatm.php');
exit;
?>
