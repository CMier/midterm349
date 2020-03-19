<?php
    $connection = mysqli_connect("localhost", "root", "", "midterm");
    if (!$connection) {
        echo "Could not connect!.". mysqli_connect_error();
        exit();
    }
?>