<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>UPDATE</title>
</head>
<body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white w-25 h-30 rounded p-4" >
            <h2>Delete</h2>

            <form method="POST">

                <button class="btn btn-success" type="submit" name="delete">Delete</button>
            </div>
            </form>

<?php
include_once ('dbconnection.php');
            if (isset($_POST['delete'])) {
                $id =
                 $_GET['id'];
                $delete = "DELETE FROM `management` WHERE id='$id'";

                if (mysqli_query($conn, $delete)) {
                    echo "<script>alert('Student Deleted Successfully'); window.location='Read.php';</script>";
                } else {
                    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
                }
            }
            ?>
        </div>
    </div>
    
</body>
</html>