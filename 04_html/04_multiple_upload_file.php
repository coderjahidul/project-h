<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultipleFile Upload</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Multiple File Upload</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos natus odit eligendi. Omnis architecto ut vel consectetur perspiciatis itaque natus.</p>
                <?php 
                    if(!is_dir('upload')){
                        mkdir('upload', 0755, true);
                    }
                    
                    if(isset($_FILES['photo'])){
                        $allowed = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');
                        $maxSize = 5 * 1024 * 1024;
                        $fileCount = count($_FILES['photo']['name']);

                        for($i = 0; $i < $fileCount; $i++){
                            $fileError = $_FILES['photo']['error'][$i];
                            $fileType = $_FILES['photo']['type'][$i];
                            $fileSize = $_FILES['photo']['size'][$i];
                            $fileTempName = $_FILES['photo']['tmp_name'][$i];
                            $fileName = $_FILES['photo']['name'][$i];
                            $uploadFilePath = 'upload/' . $fileName;
                            
                            if ($fileError === 0) {
                                if(in_array($fileType, $allowed)){
                                    if($fileSize <= $maxSize){
                                        if(move_uploaded_file($fileTempName, $uploadFilePath)){
                                            echo "<p>File {$fileName} uploaded successfully.</p>";
                                        } else {
                                            echo "<p>Failed to upload file {$fileName}.</p>";
                                        }
                                    } else {
                                        echo "<p>File {$fileName} is too large. Please upload files less than 5MB.</p>";
                                    }
                                } else {
                                    echo "<p>File {$fileName} type not allowed. Please upload only " . implode(', ', $allowed) . " files.</p>";
                                }
                            } else {
                                echo "<p>Error uploading file {$fileName}.</p>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" enctype="multipart/form-data">
                    <label for="myfile">Select Multiple files:</label>
                    <input type="file" name="photo[]" id="myfile" multiple>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
