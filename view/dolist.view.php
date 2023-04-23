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
    <link rel="stylesheet" type="text/css" href="view/assets/css/variables-style.css">
    <link rel="stylesheet" type="text/css" href="view/assets/css/dolist-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>To Do List</title>
</head>

<body>
    <header>
        <a href="<?= $GLOBALS['site_url'] ?>">
            <h1>To Do List</h1>
        </a>

    </header>

    <hr class="header-hr">

    <section>

        <div class="container">
            
            <?php foreach ($dolist as $list) : ?>
            
                <div class="task">

                    <?php
                        if ($list['status'] == 'done'){

                            echo '<h3 style="text-decoration: line-through;">'.$list["title"].'</h3>';
                            echo '<p style="text-decoration: line-through;">'.$list["body"].'</p>';

                        } else {

                            echo '<h3>'.$list["title"].'</h3>';
                            echo '<p>'.$list["body"].'</p>';
                        }
                    ?>
                    <hr>

                    <div class="change">
                        <div class="date">
                            <?php
                            $timestamp = $list['target_date'];
                            $targetdate = date("Y-m-d", $timestamp);

                            $today = new DateTime();
                            $today->setTime(00, 00, 00);
                            $todayTimestamp = $today->getTimestamp();

                            if ($timestamp < $todayTimestamp && $list['status'] == 'notdone') {
                                echo '<div style="color: red";> <i class="fa-regular fa-calendar"></i>' . ' ' . $targetdate . '</div>';
                            } else {
                                echo '<i class="fa-regular fa-calendar"></i>' . ' ' . $targetdate;
                            }
                            ?>
                        </div>

                        <div class="icons">

                            <div class="statuschange">
                               
                                <form action="<?= $GLOBALS['site_url'] ?>/status/<?=$list['id']?>/<?=$list['status']?>" method="POST">
                                    <?php
                                    if ($list['status'] == 'done') {
                                        echo '<button class="done" type="submit" value="submit">Done</button>';
                                    } else {
                                        if ($timestamp < $todayTimestamp){
                                            echo '<button style="background-color: red;" class="notdone" type="submit" value="submit">Done?</button>';
                                        } else {
                                            echo '<button class="notdone" type="submit" value="submit">Done?</button>';
                                        }
                                    }
                                    ?>
                                </form>
                            </div>

                            <?php
                            if ($list['status'] == 'notdone'){
                                if ($timestamp < $todayTimestamp) {
                                    echo '<a style="color:red" href='.$GLOBALS['site_url'].'/edit/'. $list['id'].'><i class="fa-solid fa-pen-to-square"></i></a>';

                                    echo '<i style="color:red" id="trash" class="fa-solid fa-trash"></i>';

                                } else {
                                    echo '<a href='.$GLOBALS['site_url'].'/edit/'. $list['id'].'><i class="fa-solid fa-pen-to-square"></i></a>';

                                    echo '<i id="trash" class="fa-solid fa-trash"></i>';
                                }
                                
                            } else{
                                echo '<i id="trash" class="fa-solid fa-trash"></i>';
                            }
                            ?>
                        </div>
                    </div>

                    <div id="popup" class="popup hide">
                        <div class="pop-container">

                            <div class="warn">Want to delete?</div>
                            <div class="confirm-buttons">
                                <a href="<?=$GLOBALS['site_url']?>/delete/<?=$list['id']?>">Delete</a>
                                <button id="cancelBtn" type="button">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php endforeach ?>
        </div>
        
    </section>

    <div class="add">
        <a class="" href="<?= $GLOBALS['site_url'] ?>/add"><i class="fa-solid fa-plus"></i></a>
        <p>Add</p>

    </div>
    <script src="../view/assets/js/popup.view.js"></script>
    <script src="https://kit.fontawesome.com/569015700f.js" crossorigin="anonymous"></script>
</body>

</html>