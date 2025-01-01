<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to JavaScript</title>
</head>
<body>
    <h5>PHP to JavaScript</h5>
    <input type="button" value="Show Something" id="button">
    <br>
    <input type="button" value="Show Something One" id="button1">
</body>
<script>
    <?php 
        $data = array(
            "first name" => "John",
            "lastname" => "Doe",
            "age" => "30",
            "city" => "New York",
            "email" => "sobuz0349@gmail.com"
        );

        $student = array(
            "id" => 1,
            "fname" => "Jahidul",
            "lname" => "Islam",
            "class" => "10",
            "age" => 22,
            "email" => "sobuz0349@gmail.com",
            "phone" => "01641427677",
            "address" => "Laksham"
        );
    ?>
    let student = <?php echo json_encode($student); ?>;
    let data = <?php echo json_encode($data); ?>;
    document.getElementById("button").addEventListener("click", function(){
        alert(data["first name"]);
        console.log(data);
    });

    document.getElementById("button1").addEventListener("click", function(){
        alert(student.fname);
        console.log(student);
    });
</script>
</html>