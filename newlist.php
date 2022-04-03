
<?php

include_once('cookiecheck.php');

    $filename = "/var/www/html/kathleen/lists/";
    $filename.=$_COOKIE['UserID']."shoppinglist.txt";
    $filehandle = fopen($filename,"w"); 
    
    fwrite($filehandle," ");
    fclose($filehandle);
    
    //$filehandle=fopen("/var/www/html/kathleen/lists/testlist.txt","r");
    //$stringout = fread($filehandle, 100000);
    //echo $stringout;
    //$fclose($filehandle);
    
?>

<html><body onload="window.location.href='shoppinglist.php'"></body></html>