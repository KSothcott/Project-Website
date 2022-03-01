<?php
include_once('server.php');
 

$query = 'SELECT `UserID`, `FirstName`, `LastName`, `Email`, DECODE(`password`, "'.$keystring.'") AS "PASSWORD"  FROM `userlogin`.`userinfo` WHERE `email`="'.$_POST['email'].'"';

$result = $con->query($query);

$row = $result->fetch(PDO::FETCH_ASSOC);

if(strcmp($_POST['email'],$row['Email'])) $checkemail = 0;
    else$checkemail = 1;
    
if(strcmp($_POST['password'],$row['PASSWORD']))  $checkpassword=0;
   else $checkpassword = 1;
   
if($checkemail && $checkpassword) 
{
    setcookie('cookievalue',$cookievalue,time()+3600); 
}


$con=NULL;
?>

<html><body onload="window.location.href='website.php'"></body></body></html>