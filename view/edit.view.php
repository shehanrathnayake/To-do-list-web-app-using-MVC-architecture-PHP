<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/assets/variables-style.css">
    <link rel="stylesheet" type="text/css" href="view/assets/edit-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>To Do List: Edit Task</title>
</head>

<body>

    <header>
        <a href="<?= $GLOBALS['site_url'] ?>">
            <h1>To Do List</h1>
        </a>
    </header>
    <hr>

    <div class="container">
        <h2 style="font-family: 'Poppins', sans-serif;">Edit</h2>

        <form action="<?php echo $GLOBALS['site_url']?>/update" method="POST">
            <br>
            <input type="hidden" name="id" value="<?=$dolist['id']?>">
            <input type="text" class="title" name="title" id="title" value="<?=$dolist['title']?>">
            <!-- <label for="title">Title</label> -->
            <br>
            <textarea name="body" class="body" id="body" rows="5"><?=$dolist['body']?></textarea>
            <!-- <label for="body">message</label><br> -->
            <br>
            <?php
            $date = date("yyyy-mm-dd",$dolist['target_date']);
            ?>
            <input type="date" class="date" name="date" id="date" value="<?=$date?>">
            <br>
            
            <div class="button">
                <button type="submit" value="submit">Update</button>
                <a href="<?php echo $GLOBALS['site_url'];?>">Cancel</a>
            </div>

        </form>

    </div>
    <script src="https://kit.fontawesome.com/569015700f.js" crossorigin="anonymous"></script>
</body>

</html>