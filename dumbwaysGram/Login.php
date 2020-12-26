<?php 

require 'conn.php';

if (isset($_POST['login'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $checkEmail = mysqli_query($conn, "SELECT * FROM users_tb WHERE email = '$email'");
        
        if ( mysqli_num_rows($checkEmail) === 1 ) {
            $checkPass = mysqli_fetch_assoc($checkEmail);

            if(password_verify($password, $checkPass['password'])){
                header("Location: home.php");
                exit;
            }
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

<h1 style="text-align:center;">Login</h1>

<div class="container col-md-6">
    <form action="" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" name="email" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
</div>
    
</body>
</html>