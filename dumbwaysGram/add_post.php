<?php 

    if(isset($_POST['submit'])){

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

<h1>Add New Post</h1>

<div class="container">
    <form action="conn.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="content_post">Example textarea</label>
            <textarea class="form-control" id="content_post" rows="3" name="content_post"></textarea>
        </div>
        <div class="form-group">
            <label for="image_post">Image Post</label><br>
            <input type="file" id="image_post" name="image_post">
        </div>
        <button type="submit" name="submit">submit</button>
    </form>
</div>
    
</body>
</html>