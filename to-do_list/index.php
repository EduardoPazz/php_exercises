<?php 
    include "./aux.php";
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>

    <style>
        ul {
            list-style: square;
        }
    </style>
</head>
<body>
    <h1>To-do Manager</h1>
    <fieldset>
    <form action="" method="POST">
        <div>
            <label for="username">To-do</label>
            <input type="text" name="todo" id="todo">    
            <input type="submit" value="Ok!">
        </div>
    </form>        
    </fieldset>

    <?php 
        if (isset($_POST['todo'])) store_todo($_POST['todo']);
    ?>

    <?php 
        print_todos();
    ?>
</body>
</html>