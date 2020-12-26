<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'dumbways';

    $conn = mysqli_connect($host, $user, $pass, $db);

    function registration($data){
        global $conn;

        $name = stripslashes($data['name']);
        $email = stripslashes($data['email']);
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password_confirm = $data['confirm_pass'];

        $checkEmail = mysqli_query($conn, "SELECT email FROM users_tb WHERE email = '$email'");

        if (mysqli_fetch_assoc($checkEmail)) {
            echo "<script>
                alert('Email Exists, Please Use Another Email !)
                </script>";
            return false;
        }


        if ($password !== $password_confirm) {
            echo "<script>
                alert('Password Not Confirmed !')
                </script>";
            return false;
        }
        
        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO users_tb VALUES('', '$name', '', '$email', '$password')");

        return mysqli_affected_rows($conn);

    }

    function login($data){
        global $conn;
        
        $email = $data['email'];
        $password = $data['password'];
        
        $checkEmail = mysqli_query($conn, "SELECT * FROM users_tb WHERE email = '$email'");
        
        if ( mysqli_num_rows($checkEmail) === 1 ) {
            $checkPass = mysqli_fetch_assoc($checkEmail);
            // var_dump($checkPass);

            if(password_verify($password, $checkPass['password'])){
                return true;
                exit();
            }
        }
    }

    function showPosts($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query) ;
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        
        return $rows;
    }

    function addPost(){
        $image_post = $_POST['image_post'];
        $content_post = $_POST['content_post'];
    }


?>