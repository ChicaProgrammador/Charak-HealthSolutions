<?php
include_once('connection.php');
if(isset($_POST['loginSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($username) && isset($password)) {
        $query = "SELECT * FROM doctor WHERE username='{$username}' AND password='{$password}'";
        $result = $connection->query($query);
        if ($result->num_rows == 1)
 {
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $doctor["id"];
            $_SESSION['user_type'] = $doctor["type"];
            if($user['type'] == 'doctor') {
                header("Location: http://localhost/remote/doctor.php");
            } else {
                header("Location: http://localhost/remote/patient.php");
            }
            die();
        } else {
            $_SESSION['error'] = "User not found";
            header("Location: http://localhost/remote/login.php");
        }
        $connection->close();
    } else {
        $_SESSION['error'] = "Enter your username and password!";
        header("Location: http://localhost/remote/login.php");
    }
}

?>
