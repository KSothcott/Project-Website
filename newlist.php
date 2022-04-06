
<?php

include_once('cookiecheck.php');

    $filename = "/var/www/html/kathleen/lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt";
    $filehandle = fopen($filename,"w"); 
    
    fwrite($filehandle," ");
    fclose($filehandle);
   
?>

<html><body onload="window.location.href='shoppinglist.php'"></body></html>