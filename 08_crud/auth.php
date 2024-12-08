<?php 
    session_start([
        'cookie_lifetime' => 300, // 5 minutes
    ]);
    // session_destroy();

    $base_url = 'http://localhost/project-h/08_crud/';
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fileOpen = fopen(__DIR__. "/data/users.txt", 'r');
    
    if($username && $password){
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        while($data = fgetcsv($fileOpen)){
            if($data[0] == $username && $data[1] == sha1($password)){
                $_SESSION['loggedin'] = true;
                $_SESSION['user'] = $username;
                header("Location: {$base_url}");
                exit;
            }
        }
        if(!$_SESSION['loggedin']){
            $error = "Invalid Username or Password";
        }
    }

    if(isset($_GET['logout'])){
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        session_destroy();
        header("location: {$base_url}");
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
            <h2>Simple Auth Example</h2>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php 
                $session = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;    
                if(true == $session){
                    echo "Hello Admin, Welcome!";
                }else{
                    echo "Hello Stranger, Login Below";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php 
                if(isset($error)){
                    echo "<blockquote>{$error}</blockquote>";
                }
                if(false == $session):
                    ?>
                        <form method="POST">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username">

                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">

                            <button type="submit" class="button-primary"name="submit">Log In</button>
                        </form>
                    <?php 
                else:
                    ?>
                        <form method="POST" action="03_auth.php">
                            <input type="hidden" name="logout" value="1">
                            <button type="submit" class="button-primary"name="submit">Log Out</button>
                        </form>
                    <?php
                endif;  
            ?>
        </div>
    </div>
</div>
</body>
</html>