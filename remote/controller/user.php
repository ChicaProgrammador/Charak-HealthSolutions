<?php
include_once('connection.php');
if(isset($_SESSION['user_id'])) {
    $query = "SELECT * FROM `user` WHERE `id` = '{$_SESSION['user_id']}'";
    $result = $connection->query($query);
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $id = $user["id"];
        $name = $user["name"];
        $email = $user["email"];
        $address = $user["address"];
        $dob = $user["dob"];
        $username = $user["username"];
        $password = $user["password"];
    } else {
        $_SESSION['error'] = "User not found!";
        header('Location: http://localhost/remote/login.php');
        die();
    }
} else {
    $_SESSION['error'] = "User not logged in!";
    header('Location: http://localhost/remote/login.php');
    die();
}
?>
