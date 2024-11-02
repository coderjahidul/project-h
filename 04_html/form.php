
<?php 
    require_once 'functions.php';
?>
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
                    <?php 
                        $first = '';
                        $last = '';
                        $checked = '';

                        if( isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1){
                            $checked = 'checked';
                        }
                        print_r($_REQUEST);
                    ?>
                    First Name: <?php 
                    if(isset($_REQUEST['first']) && !empty($_REQUEST['first'])){
                        // $first = htmlspecialchars($_REQUEST['first']);
                        $first = filter_input(INPUT_POST, 'first', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        echo $first;
                    }else {
                        echo "First Name Not Found";
                    }
                    
                    ?><br>
                    Last Name: <?php 
                    if(isset($_REQUEST['last']) && !empty($_REQUEST['last'])){
                        // $last = htmlspecialchars($_REQUEST['last']);
                        $last = filter_input(INPUT_POST, 'last', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        echo $last;
                    }else{
                        echo "Last Name Not Found";
                    }
                    ?><br>
                    Checkbox Status: <?php echo isset($_REQUEST['cb1']) ? 'Yes' : 'No';?>
                </P>
            </div>
        </div>
        <div class="row">
            <div class="column-60 column-offset-20"></div>
                <form method="POST">
                    <label for="first">First Name</label>
                    <input type="text" id="first" name="first" value="<?php echo $first;?>">

                    <label for="last">Last Name</label>
                    <input type="text" id="last" name="last" value ="<?php echo $last;?>">

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                        <label for="cb1" class=label-inline>Some Checkbox</label>
                    </div>

                    <label class="label">Select Some Fruits</label>

                    <input type="checkbox" id="orange" name="fruit[]" value="orange" <?php //isChecked('fruit', 'orange');?> <?php isFruitChecked('orange');?>>
                    <label for="orange" class="label-inline">Orange</label><br>

                    <input type="checkbox" id="mango" name="fruit[]" value="mango" <?php //isChecked('fruit', 'mango');?> <?php isFruitChecked('mango');?>>
                    <label for="mango" class="label-inline">Mango</label><br>

                    <input type="checkbox" id="banana" name="fruit[]" value="banana" <?php //isChecked('fruit', 'banana');?> <?php isFruitChecked('banana');?>>
                    <label for="banana" class="label-inline">Banana</label><br>

                    <input type="checkbox" id="lemon" name="fruit[]" value="lemon" <?php //isChecked('fruit', 'lemon');?><?php isFruitChecked('lemon');?>>
                    <label for="lemon" class="label-inline">Lemon</label><br>

                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</body>
</html>