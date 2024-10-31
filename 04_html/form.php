<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos natus odit eligendi. Omnis architecto ut vel consectetur perspiciatis itaque natus.</p>
                <P>
                    First Name: <?php 
                    if(isset($_REQUEST['first']) && !empty($_REQUEST['first'])){
                        echo $_REQUEST['first']; 
                    }else {
                        echo "First Name Not Found";
                    }
                    
                    ?><br>
                    Last Name: <?php 
                    if(isset($_REQUEST['last']) && !empty($_REQUEST['last'])){
                        echo $_REQUEST['last'];
                    }else{
                        echo "Last Name Not Found";
                    }
                    ?>
                </P>
            </div>
        </div>
        <div class="row">
            <div class="column-60 column-offset-20"></div>
                <form method="POST">
                    <label for="first">First Name</label>
                    <input type="text" id="first" name="first">

                    <label for="last">Last Name</label>
                    <input type="text" id="last" name="last">

                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</body>
</html>