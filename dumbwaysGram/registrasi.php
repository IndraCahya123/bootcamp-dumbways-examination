<?php 

require 'conn.php';

if (isset($_POST['register'])) {
    if (registration($_POST) > 0) {
        header("Location: home.php");
    } else {
        echo mysqli_error($conn);
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways Gram</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Registration</h1>
    <div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" name="email" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your password">
        </div>
        <div class="form-group">
            <label for="confirm_pass">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="Confirm Your Password">
        </div>
        <button type="submit" name="register">Register</button>
    </form>
    </div>
</body>
</html>