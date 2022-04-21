<?php

date_default_timezone_set('Europe/London');
include_once('server.php');

$query = 'SELECT `UserID`, `FirstName`, `LastName`, `Email`, DECODE(`password`, "'.$keystring.'") AS "PASSWORD"  FROM `userlogin`.`userinfo` WHERE `email`="'.$_POST['email'].'"';

$result = $con->query($query);

$row = $result->fetch(PDO::FETCH_ASSOC); 

if(strcmp($_POST['email'],$row['Email'])) $checkemail = 0;
    else$checkemail = 1;

if(strcmp($_POST['password'],$row['PASSWORD']))  $checkpassword = 0;
   else $checkpassword = 1;
   
if($checkemail && $checkpassword) 
{
    $query = "INSERT INTO `userlogin`.`logincookies`(`sessioncookie`,`time`,`UserID`) VALUES (".rand(1000,25000).",'".time()."', '".$row['UserID']."')";
   
    $con->query($query);
    
    $query = "SELECT * FROM `userlogin`.`logincookies` WHERE `UserID` = ".$row['UserID']." AND `time` = (SELECT MAX(`time`) FROM `userlogin`.`logincookies`)";
    
    $result = $con->query($query);
    
    $row = $result->fetch(PDO::FETCH_ASSOC);
    
    $userid = $row['UserID'];
    
    $sessionid = $row['SessionID'];
     
    $cookievalue = $row['sessioncookie'];
    
    setcookie('cookievalue',$cookievalue,time()+3600);  
    
    setcookie('SessionID',$sessionid,time()+3600);
    
    setcookie('UserID',$userid,time()+3600);
    
}
 
$con=NULL;
?>

<html><body onload="window.location.href='https://brendansothcott.co.uk/kathleen/website.php'"></body></body></html>