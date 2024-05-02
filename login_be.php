<?php 
define('ROOT_URL', 'http://localhost/da_khoa_g37/');
$conn = mysqli_connect("localhost","root","","laravel");


    // get form data
    $email = $_POST['email'];
    $password = $_POST['password'];
 
        
        //get user from database
        $fetch_user_query = "SELECT logins.*,users.* FROM logins join users on users.login_id = logins.id WHERE email='$email'";
        $fetch_user_result = mysqli_query($conn, $fetch_user_query);
        
        
        if(mysqli_num_rows($fetch_user_result) == 1) {
            // convert the result into assoc array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            
            // compare the form password to the database password
            if(password_verify($password, $db_password)) {
                // set access for access control
                // log user in
                session_start();
                $_SESSION['uuid'] = $user_record['uuid'];
                $_SESSION['name'] = $user_record['last_name'] . ' ' .$user_record['first_name'];
                $_SESSION['gender'] = $user_record['gender'];
                
                header('location: ' . ROOT_URL );
            } else{
                
            }
        }
        else {
            header('location: ' . ROOT_URL );
        }
  