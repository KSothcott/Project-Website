
<?php

include_once('cookiecheck.php');

    $filename = "./lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt";
    $filehandle = fopen($filename,"w"); 
    
    fwrite($filehandle," ");
    fclose($filehandle);
    
?>

<html><body onload="window.location.href='https://brendansothcott.co.uk/kathleen/shoppinglist.php'"></body></html>