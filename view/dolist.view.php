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
    <link rel="stylesheet" type="text/css" href="view/assets/variables-style.css">
    <link rel="stylesheet" type="text/css" href="view/assets/dolist-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>To Do List</title>
</head>

<body>
    <header>
        <h1>To Do List</h1>
    </header>
    <hr>

    <section>

        <div class="container">

            <?php foreach ($dolist as $list) : ?>
                <div class="task">
                    <h3><?= $list['title'] ?></h3>
                    <p><?= $list['body'] ?></p>
                    <hr>

                    <div class="change">
                        <div class="date">
                            <?php
                            $timestamp = $list['target_date'];
                            $targetdate = date("Y-m-d",$timestamp);
                            echo '<i class="fa-regular fa-calendar"></i>'.' '.$targetdate;
                            ?>
                        </div>
                        <div class="icons">
                            <a href="<?= $GLOBALS['site_url'] ?>/edit/<?= $list['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?= $GLOBALS['site_url'] ?>/delete/<?= $list['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        
                    </div>

                </div>

            <?php endforeach ?>

        </div>

    </section>



    <div class="add">
        <a class="" href="<?= $GLOBALS['site_url'] ?>/add"><i class="fa-solid fa-plus"></i></a>

    </div>

    <script src="https://kit.fontawesome.com/569015700f.js" crossorigin="anonymous"></script>
</body>

</html>