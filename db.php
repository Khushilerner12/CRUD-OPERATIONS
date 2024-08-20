<?php
$con = new mysqli('localhost', 'root', '', 'crud');
if ($con) {
    // echo "conection done";
} else {
    die(mysqli_error($con));
}
