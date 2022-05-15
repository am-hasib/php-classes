<?php
include "connection.php";
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $mobile =  $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password) values('$name', '$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data Inserted SuccessFully";
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
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form method="POST" class="mt-3">
            <div class="mb-3">
                <label class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Email</label>
                <input type="email" class="form-control" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Mobile Number</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Your Password</label>
                <input type="text" class="form-control" name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>