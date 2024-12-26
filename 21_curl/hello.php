<?php 
echo "Welcome to the beautiful world of Curl & PHP";
if(isset($_POST['secret']) && 'noodles' == $_POST['secret']){
    echo "<br> Please have some Noodles :)";
}
?>