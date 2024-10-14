<?php
$conn = mysqli_connect("localhost", "root", "", "laravel") or die($conn);
define('ROOT_URL', 'http://localhost/da_khoa_g37/');

// get Sign up form data if sign up button was clicked

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$group = $_POST['group'];
$email = $_POST['email'];
$createpassword = $_POST['createpassword'];
$confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone_number = $_POST['phone_number'];
$datetime = date('Y-m-d H:i:s');


// check if password don't match 
if (!empty($email) && !empty($phone_number) && !empty($createpassword)) {
    if ($createpassword !== $confirmpassword) {
        echo "<script>alert('Mật khẩu và xác nhận mật khẩu không khớp!'); window.history.back();</script>";
        exit;
    } else {
        // hash the password for security
        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

        // check if username or email already exist in the database
        $login_query_check = "SELECT * FROM logins WHERE email = '$email'";
        $user_check_result = mysqli_query($conn, $login_query_check);
        if (mysqli_num_rows($user_check_result) > 0) {
            echo "<script>alert('Email đã tồn tại!'); window.history.back();</script>";
        } else {
            $insert_login = "INSERT INTO logins (email, password, phone_number, activated, created_at, updated_at)
                    VALUES ('$email', '$hashed_password', '$phone_number', '1', '$datetime', '$datetime')";
            $insert_login_result = mysqli_query($conn, $insert_login);
            $id_logins = mysqli_insert_id($conn);
            if (!empty($id_logins)) {
                $insert_users = "INSERT INTO users (uuid, first_name, last_name, gender, dob, login_id, created_at, updated_at)
                        VALUES (UUID(), '$first_name', '$last_name', '$gender', '$dob', '$id_logins', '$datetime', '$datetime')";
                $insert_users_result = mysqli_query($conn, $insert_users);
                $sql_select_users = "SELECT uuid FROM users ORDER BY uuid DESC limit 1";
                $select_users = mysqli_query($conn, $sql_select_users);
                $row = mysqli_fetch_assoc($select_users);
                $uuid_users = $row['uuid'];
                if (!empty($uuid_users)) {
                    $sql_group = "SELECT * FROM `groups` WHERE slug = '$group' ";
                    $group_id_result = mysqli_query($conn, $sql_group);
                    $group_id = mysqli_insert_id($conn);

                    if (empty($group_id)) {
                        $sql_group = "INSERT INTO `groups` (name, slug, activated, created_at, updated_at)  
                                    VALUES ('Bệnh nhân', '$group', '1', '$datetime', '$datetime')";

                        $save_group = mysqli_query($conn, $sql_group);
                        $sql_select_group_id = "SELECT id FROM `groups` WHERE slug = '$group' ";
                        $select_group_id = mysqli_query($conn, $sql_select_group_id);
                        $row = mysqli_fetch_assoc($select_group_id);
                        $group_id = $row['id'];
                    }
                    $insert_group_users = "INSERT INTO group_users (user_uuid, group_id, created_at, updated_at)
                                VALUES ('$uuid_users', '$group_id', '$datetime', '$datetime')";
                    $insert_group_users_result = mysqli_query($conn, $insert_group_users);
                    if (!empty($insert_group_users_result)) {
                        session_start();
                        foreach ($select_users as $item) {
                            $_SESSION['uuid'] = $item['uuid'];
                            $_SESSION['name'] = $last_name . ' ' . $first_name;
                            $_SESSION['gender'] == $item['gender'];
                            $_SESSION['email'] = $email;
                            $_SESSION['phone_number'] = $phone_number;
                            header('location: ' . ROOT_URL);
                        }
                    }
                }
            }
        }
    }
}


