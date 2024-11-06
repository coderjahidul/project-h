
<?php 
    require_once '02_functions.php'; // include_once, require_once 02_functions.php
    $fruits = array('apple', 'Banana', 'orange', 'plum', 'dates', 'mango','strawberry', 'pineapple', 'lemon');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Dropdown</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Select Dropdowns</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos natus odit eligendi. Omnis architecto ut vel consectetur perspiciatis itaque natus.</p>

                <p>
                    <?php
                        // single select function 
                        /*
                        if(isset($_POST['fruits']) && !empty($_POST['fruits'])){
                            printf("You Selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
                        }
                        */
                        // multiple select function
                        $sfruits = $_POST['fruits'] ?? [];

                        // filter function
                        // $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                        if(count($sfruits) > 0){
                            printf("You Selected: ".join(", ", $sfruits));
                        }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select name="fruits[]" id="fruits" multiple>
                        <option value="">Select Some Fruits</option>
                        <?php displayOptions($fruits, $sfruits);?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>