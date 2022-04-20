<?php

include_once('server.php');
include_once('cookiecheck.php');

    $query = 'UPDATE `userlogin`.`mealplan` SET `1BName`=NULL, `1BNote`=NULL, `1LName`=NULL, `1LNote`=NULL, `1DName`=NULL, `1DNote`=NULL, `2BName`=NULL, `2BNote`=NULL, `2LName`=NULL, `2LNote`=NULL, `2DName`=NULL, `2DNote`=NULL, `3BName`=NULL, `3BNote`=NULL, `3LName`=NULL, `3LNote`=NULL, `3DName`=NULL, `3DNote`=NULL, `4BName`=NULL, `4BNote`=NULL, `4LName`=NULL, `4LNote`=NULL, `4DName`=NULL, `4DNote`=NULL, `5BName`=NULL, `5BNote`=NULL, `5LName`=NULL, `5LNote`=NULL, `5DName`=NULL, `5DNote`=NULL, `6BName`=NULL, `6BNote`=NULL, `6LName`=NULL, `6LNote`=NULL, `6DName`=NULL, `6DNote`=NULL, `7BName`=NULL, `7BNote`=NULL, `7LName`=NULL, `7LNote`=NULL, `7DName`=NULL, `7DNote`=NULL WHERE `UserID` ='.$_COOKIE['UserID']; 

    $con->query($query);


?>

<html><body onload="window.location.href='https://brendansothcott.co.uk/kathleen/mealplanner.php'"></body></html>