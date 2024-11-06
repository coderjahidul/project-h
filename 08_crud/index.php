<?php
    include_once('inc/function.php');
    $base_url = 'http://localhost/project-h/08_crud/index.php';
    $info = '';
    $task = $_GET['task'] ?? 'report';
    $error = $_GET['error'] ?? '0';
    if('seed' == $task){
        seed();
        $info = "Seeded Successfully";
    }
    $fname = '';
    $lname = '';
    $class = '';
    $roll = '';
    $age = '';
    if(isset($_POST['submit'])){
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_NUMBER_INT);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

        if($id){
            // Update Student Record
            if(!empty($fname) && !empty($lname) && !empty($class) && !empty($roll) && !empty($age)){
                $result = updateStudent($id, $fname, $lname, $class, $roll, $age);
                header("Location: {$base_url}?task=report");
                exit;
            }
        }else{
            // Add New Student Record
            if(!empty($fname) && !empty($lname) && !empty($class) && !empty($roll) && !empty($age)){
                $result = addStudent($fname, $lname, $class, $roll, $age);
                if($result){
                    header("Location: {$base_url}?task=report");
                    exit;
                }else{
                    $error = '1';
                }
            }
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
    <?php if('1' == $error): ?>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <blockquote style="color:red;">Roll number already exists. Please try again.</blockquote>
        </div>
    </div>
    <?php endif; ?>
    <?php if('report' == $task): ?>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php generateReport(); ?>
        </div>
    </div>
    <?php endif; ?>
    <!-- Edit Student Form -->
    <?php if('edit' == $task): 
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $student = getStudent($id);
        if($student):
    ?>
    <div class="row"></div>
        <div class="column column-60 column-offset-20">
            <form method="POST" action="<?php echo $base_url; ?>?task=edit">
                
                <input type="hidden" name="id" value="<?php echo $id?>">

                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">
                
                <label for="class">Class</label>
                <input type="text" name="class" id="class" value="<?php echo $student['class']; ?>">

                <label for="roll">Roll Number</label>
                <input type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?>">

                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="<?php echo $student['age']; ?>">

                <button type="submit" class="button-primary"name="submit">Update</button>
            </form>
        </div>
    </div>
    <?php 
        endif; 
    endif;
    ?>

    <?php if('add' == $task): ?>
    <div class="row"></div>
        <div class="column column-60 column-offset-20">
            <form method="POST" action="<?php echo $base_url; ?>?task=add">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                
                <label for="class">Class</label>
                <input type="text" name="class" id="class" value="<?php echo $class; ?>">

                <label for="roll">Roll Number</label>
                <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="<?php echo $age; ?>">

                <button type="submit" class="button-primary"name="submit">Save</button>
            </form>
        </div>
    </div>
    <?php endif; ?>
</div>
</body>
</html>