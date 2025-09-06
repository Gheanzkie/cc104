<?php
include ('dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Student Lis</title>
</head>
<body>
    <div class="bg-dark d-flex justify-content-center align-items-center w-100 vh-100">
        <div class="bg-white p-4 w-50 rounded">
            <table class="table">
                <thead>
                    <th>Name</th>
                      <th>Course</th>
                        <th>Year Level</th>
                          <th>Section</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `management`";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($r = mysqli_fetch_assoc($result)) {
            
                    ?>
                    <tr>
                        <td><?php echo $r['fullname'];?> </td>
                        <td><?php echo $r['course'];?> </td>
                        <td><?php echo $r['year_level'];?> </td>
                        <td><?php echo $r['section'];?> </td>
                        <td>
                        <a href="Update.php?id=<?php echo $r['id'] ?>" class="btn btn-sm btn-info">Update</button>
                        <a href="delete.php?id=<?php echo $r['id'] ?>" class="btn btn-sm btn-danger">Delete</button>
                        </td>

                    </tr>
                    <?php
                    }
                }
                    ?>
                    
                </tbody>
            </table>

        </div>
    </div>
    
</body>
</html> 