<?php
session_start();
unset($_SESSION['uuid']);
unset($_SESSION['name']);
unset($_SESSION['gender']);
unset($_SESSION['email']);
unset($_SESSION['phone_number']);
header('location:index.php');