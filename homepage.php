<?php
session_start();
include_once ('dbconnection.php');

if(!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first.'); window.location.href='login.php';</script>";
    exit();
}
//if ($_SESSION['role'] !== 'user') {
//     echo "<script>alert('Unauthorized access.'); window.location.href='login.php';</script>";
//     exit();
// }

$fullname = $_SESSION['fullname'];
$username = $_SESSION['username'];

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class = "bg-dark w-100 h-100 justify-content-center align-items-center">
    <div class="bg-white w-30 h-30 p-4">
     <h2>Welcome <?php echo $fullname ?>!</h2>


        <a href="sessiondel.php" class="btn btn-danger" type="submit" name="back">Logout</a>

    </div>
    </div>
</body>
</html>