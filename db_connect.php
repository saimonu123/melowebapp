<?php
    $db = mysqli_connect("172.17.0.3", "app_user", "app123app123", "canclub_web");
    // Check connection
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
