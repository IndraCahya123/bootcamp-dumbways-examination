<?php 

require 'conn.php';

$posts = showPosts('SELECT * FROM posts_tb');

// var_dump($posts);
// die;

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        </ul>
        <div class="logout">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container d-flex flex-colum mt-5">
        <?php foreach($posts as $post) : ?>
            <div class="card mt-3">
                <img class="card-img-top" src="images/post/<?= $post['image'] ?>" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><?= $post["content"] ?></p>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    </div>
</body>
</html>