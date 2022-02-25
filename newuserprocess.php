
<?php


    $con = new PDO("mysql:host=127.0.0.1;dbname=userlogin","root","bi11andben");
    
    $query = 'SELECT * FROM `userinfo` WHERE `Email` = "'.$_POST['email'].'"';
    
    $result = $con->query($query);
    $is_exist_email=sizeof($row = $result->fetch(PDO::FETCH_ASSOC))-1;
    
    if($is_exist_email) echo 'email exists';
    else echo 'New email';
    
    
    
    $con = null;
?>

