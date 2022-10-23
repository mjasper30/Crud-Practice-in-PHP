<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary mb-3"><a href="user.php" class="text-light text-decoration-none">Add User</a></button>
        
        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <?php
                $sql="select * from `crud`";
                $result=mysqli_query($con,$sql);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $username=$row['username'];
                        $password=$row['password'];
                        echo ' 
                        <tr>
                            <td>' . $id .'</td>
                            <td>' . $name .'</td>
                            <td>' . $email .'</td>
                            <td>' . $username .'</td>
                            <td>' . $password .'</td>
                            <td>
                                <button class="btn btn-primary"><a href="update.php?updateid='. $id .'" class="text-light text-decoration-none">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='. $id .'" class="text-light text-decoration-none">Delete</a></button>
                            </td>
                        </tr>
                        ';
                    }
                }
            ?>
        </table>
    </div>
</table>
</body>
</html>