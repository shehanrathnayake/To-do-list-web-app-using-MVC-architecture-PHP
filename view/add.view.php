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
    <link rel="stylesheet" type="text/css" href="view/assets/css/add-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>To Do List: Add Task</title>
</head>

<body>

    <header>
        <a href="<?= $GLOBALS['site_url'] ?>">
            <h1>To Do List</h1>
        </a>

    </header>
    <hr class="header-hr">

    <div class="container">
        <h2>New</h2>

        <form action="<?php echo $GLOBALS['site_url']?>/save" method="POST">
            <br>
            <input type="text" id="title" name="title" placeholder="No Title" required>

            <p class="error_message"></p>

            <br>
            <textarea name="body" id="body" rows="5" placeholder="No Content.."></textarea>
            
            <br>
            <label for="date">Set Reminder</label>
            <input id="date" type="date" name="date" placeholder="">
            <br>

            <div class="button">
                <button class="action-btn" type="submit" value="submit">Save</button>
                <a class="action-btn" href="<?php echo $GLOBALS['site_url'];?>">Cancel</a>
            </div>
            
        </form>

    </div>
    <script src="view/assets/js/validate.view.js"></script>
</body>

</html>