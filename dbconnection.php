<?php

$conn = mysqli_connect("localhost", "root", "", "cc104"); 

if(mysqli_connect_error()) {
    echo "Connection Failed". mysqli_connect_error();
}
?>