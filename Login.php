<?php
session_start();
include_once ('dbconnection.php');

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM `management` WHERE `username`='$username' AND `password`='$password'";
    
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullname = $row['fullname'];

        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $fullname;



        

        if ($username === "admin" && $password === "admin") {
             $_SESSION['role'] = "admin";
             echo "<script>alert('Welcome Admin $fullname!'); window.location.href='Read.php';</script>"; 
        } else {
            $_SESSION['role'] = "user";
            echo "<script>alert('Welcome $fullname!'); window.location.href='homepage.php';</script>";
        }
    }  else {
        echo "<script>alert('Invalid Username or Password!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>LOGIN PAGE</title>
</head>
<body>
    <form method="POST" action=" ">
        <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
            <div class="bg-white w-70 h-70 rounded p-4">
                <h2 class="text-center">Login</h2>
                <div class="mb-2">
                     <input type="text" class="form-control" name="username" placeholder="Enter your Username" required>
                </div>
                <div class="mb-2">
                     <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
                </div>
                <button class="btn btn-success w-100" type="submit" name="submit">Login</button>
                <a href="Create.php" class="btn btn-danger w-100 mt-2">Register</a>
            </div>
        </div>
    </form>
</body>
</html>
