
<?php
    include_once('header.php');
    $con = new PDO("mysql:host=127.0.0.1;dbname=userlogin","root","bi11andben");
    
    $query = 'SELECT * FROM `userinfo` WHERE `email`= "'.$_POST['email'].'"';
    
    $result = $con->query($query);
    $is_exist_email=sizeof($row = $result->fetch(PDO::FETCH_ASSOC))-1;
    
    if($is_exist_email) echo 'email exists';

    
  $query = 'INSERT INTO `userlogin`.`userinfo` (`FirstName`, `LastName`, `Email`, `password`) VALUES ("'.$_POST['firstname'].'", "'.$_POST['lastname'].'", "'.$_POST['email'].'", ENCODE("'.$_POST['password'].'", "'.$keystring.'"))';   
   
   $con->query($query);   
    
    $con = null;

    setcookie('cookievalue',$_POST['email'].time(),time()+(60*60));
?>

