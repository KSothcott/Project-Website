<?php

include_once('server.php');

    setcookie('cookievalue',$cookievalue,$row['time']+0); 
    
    setcookie('SessionID',$sessionid,$row['time']+0);
    
    setcookie('UserID',$userid,$row['time']+0);
    
    $con=NULL;
    
?>

<html><body onload="window.location.href='https://brendansothcott.co.uk/kathleen/login.php'"></body></body></html>