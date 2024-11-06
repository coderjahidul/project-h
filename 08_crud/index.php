<?php
    include_once('inc/function.php');
    $base_url = 'http://localhost:82/project-h/08_crud/index.php';
    $info = '';
    $task = $_GET['task'] ?? 'report';
    if('seed' == $task){
        seed();
        $info = "Seeded Successfully";
    }
    if(isset($_GET['task']) && 'add' == $_GET['task']){
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_NUMBER_INT);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);


        if(!empty($fname) && !empty($lname) && !empty($class) && !empty($roll) && !empty($age)){
            addStudent($fname, $lname, $class, $roll, $age);
            header("Location: {$base_url}?task=report");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Project 2 - CRUD</h2>
            <p>A sample project to perform CRUD operations using plain files and PHP</p>
            <?php include_once('inc/templates/nav.php');?>
            <hr>
            
            <?php
                if(!empty($info)){
                    echo "<p>{$info}</p>";
                }
            ?>
        
        </div>
    </div>
    <?php if('report' == $task): ?>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php generateReport(); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if('add' == $task): ?>
    <div class="row"></div>
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
                
                <label for="class">Class</label>
                <input type="text" name="class" id="class">

                <label for="roll">Roll Number</label>
                <input type="number" name="roll" id="roll">

                <label for="age">Age</label>
                <input type="number" name="age" id="age">

                <button type="submit" class="button-primary"name="submit">Save</button>
            </form>
        </div>
    </div>
    <?php endif; ?>
</div>
</body>
</html>