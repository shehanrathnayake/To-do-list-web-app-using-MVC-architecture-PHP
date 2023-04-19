<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>To Do List: Add Task</title>
</head>

<body>

    <div class="container" style="width:100%; font-style:'Roboto'">

        <form action="<?php echo $GLOBALS['site_url'];?>/save" method="POST">
            
            <input type="text" class="form-control mt-5 mx-2" name="title" id="title" value="No Title">
            <label for="title">Title</label>
            
            <textarea name="body" class="form-control mt-5 mx-2" id="body" rows="5" value="No message" placeholder="No message.."></textarea>
            <label for="body">message</label><br>

            <button type="submit" class="btn btn-primary mt-5 mx-2" value="submit">Save</button>

        </form>

    </div>

</body>

</html>