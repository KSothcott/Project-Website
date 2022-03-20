
<?php
    include_once('server.php');
    
    $query = 'SELECT * FROM `userinfo` WHERE `email`= "'.$_POST['email'].'"';
    
    $result = $con->query($query);
    $is_exist_email=sizeof($row = $result->fetch(PDO::FETCH_ASSOC))-1;
    
    if($is_exist_email) echo 'email exists';

    
  $query = 'INSERT INTO `userlogin`.`userinfo` (`FirstName`, `LastName`, `Email`, `password`) VALUES ("'.$_POST['firstname'].'", "'.$_POST['lastname'].'", "'.$_POST['email'].'", ENCODE("'.$_POST['password'].'", "'.$keystring.'"))';   
   
   $con->query($query);   
    
    $con = null;

    setcookie('cookievalue',$cookievalue,(time()+3600));
?>


<html><body onload="window.location.href='website.php'"></body></html>