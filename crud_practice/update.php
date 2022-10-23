<?php
    include 'connect.php';
    $id=$_GET['updateid'];

    $sql="select * from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    $name=$row['name'];
    $email=$row['email'];
    $username=$row['username'];
    $password=$row['password'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql="update `crud` set id=$id,name='$name',email='$email',username='$username',password='$password' where id=$id";
        $result=mysqli_query($con,$sql);

        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="div container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"  value=<?php echo $name?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" name="username" autocomplete="off" value=<?php echo $username?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password?>>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" name="submit">Update</button>
            </div>
        </form>
    </div>
  </body>
</html>