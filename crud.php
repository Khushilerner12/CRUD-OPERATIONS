<?php

include 'db.php';
if (isset($_POST['submit'])) {
    $id;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "insert into crudoperation values ('$id','$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "data inserted sucessfully";
        header('location:display.php');
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
                <input type="text" class="form-control" placeholder="enter your name" name="name">
            </div>
            <div class="form-grop">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="enter your email" name="email">
            </div>
            <div class="form-grop">
                <label>Mobile no</label>
                <input type="text" class="form-control" placeholder="enter your mobileno" name="mobile">
            </div>
            <div class="form-grop">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="password">
            </div><br><br>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>



    </div>


</body>

</html>