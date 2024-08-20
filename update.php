<?php

include 'db.php';
$id = $_GET['updateid'];
$sql = "select * from crudoperation where id=$id";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobileno'];
$password = $row['password'];
if (isset($_POST['submit'])) {
    $id = $_GET['updateid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "update crudoperation set id=$id,name='$name' ,email='$email',mobileno='$mobileno',password='$password'
    where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "data updated sucessfully";
        header("location:display.php");
    } else {
        die(mysqli_error($con));
    }
}




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container my-5">
        <form method="post">


            <div class="form-grop">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="enter your name" name="name" value=<?php echo $name; ?>>
            </div>
            <div class="form-grop">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="enter your email" name="email" value=<?php echo $email; ?>>
            </div>

            <div class="form-grop">
                <label>Mobile no</label>
                <input type="text" class="form-control" placeholder="enter your mobileno" name="mobile" value=<?php echo $mobile; ?>>
            </div>

            <div class="form-grop">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="password" value=<?php echo $password; ?>>
            </div>
            <br><br>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>



    </div>


</body>

</html>