
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>File Upload</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos natus odit eligendi. Omnis architecto ut vel consectetur perspiciatis itaque natus.</p>

                <!-- <pre> -->
                    <p>
                        <?php
                            // print_r($_POST);
                            // print_r($_FILES);
                        ?>
                        <?php 
                            if(!is_dir('upload')){
                                mkdir('upload', 0755, true);
                            };
                            

                            if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
                                $fileTypes = $_FILES['photo']['type'];
                                $ending = explode('/', $fileTypes);
                                $fileType = $ending[1];
                                $allowed = array('jpg', 'jpeg', 'png', 'gif');
                                $maxSize = 5 * 1024 * 1024; // 5MB
                                $fileSize = $_FILES['photo']['size'];
                                if(in_array($fileType, $allowed)){
                                    if($fileSize <= $maxSize){
                                        move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/' . $_FILES['photo']['name']);
                                        echo 'File uploaded successfully';
                                    }else {
                                        echo 'File too large. Please upload less than 5MB';
                                    }
                                    
                                }else {
                                    echo 'File type not allowed. Please Upload only ' . implode(', ', $allowed);
                                }
                                
                            }
                        ?>
                    </p>
                <!-- </pre> -->
            </div>
            
        </div>
        <div class="row">
            <div class="column-60 column-offset-20">
                <form method="POST" enctype="multipart/form-data">

                    <label for="myfile">Select a file:</label>
                    <input type="file" name="photo" id="myfile">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>