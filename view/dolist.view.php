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
    <title>To Do List</title>
</head>

<body>

    <div class="add">
        <a class="btn btn-primary" href="<?=$GLOBALS['site_url']?>/add">Add</a>

    </div>

    <div>
        <?php foreach ($dolist as $list) : ?>
            <h1><?=$list['title']?></h1>
            <p><?=$list['body']?></p>
            <hr>
        <?php endforeach ?>
    </div>

</body>

</html>