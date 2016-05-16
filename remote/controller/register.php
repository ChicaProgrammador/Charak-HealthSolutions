<?php
include_once('connection.php');
if(isset($_POST['registerSubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password == $confirm_password) {
        if(isset($name) && isset($email) && isset($address) && isset($dob) && isset($sex) && isset($username) && isset($password)) {
            $query = "INSERT INTO user (`name`, `email`, `address`, `dob`, `sex`, `username`, `password`) VALUES ('{$name}', '{$email}', '{$address}', '{$dob}', '{$sex}', '{$username}', '{$password}')";
            if ($connection->query($query) === TRUE) {
                echo "Registered!";
            } else {
                echo "Error: " . $query . "<br>" . $connection->error;
            }
            $connection->close();
        } else {
            echo "Enter your username and password!";
        }
    } else {
        echo "Password & Confirm passoword doesn't match!";
    }
} ?>
