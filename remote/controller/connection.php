<?php
    include('session.php');
    $host = "localhost"; #server
    $user = "root"; #database user name
    $password = ""; #database user password
    $database = "remote"; #database name

    $connection = new mysqli($host, $user, $password, $database);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

?>
