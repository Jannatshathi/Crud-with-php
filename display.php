<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud OPeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5" > <a href="user.php" class="text-light" >Add User</a>
            </button>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                  </tr>
                </thead>
                <tbody>

                    
                    <?php
                    
                    $sql="Select * from `crud`";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        $row=mysqli_fetch_assoc($result);
                        echo $row['name'];
                    }

                    ?>

                </tbody>
              </table>
    </div>
</body>
</html>
