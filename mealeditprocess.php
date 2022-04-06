
<?php
    
    include_once('server.php');    
 
    $query = 'UPDATE `userlogin`.`mealplan` SET `'.$_POST['mealday'].$_POST['mealtype'].'Name` = "'.$_POST['mealname'].'" WHERE `UserID` ='.$_COOKIE['UserID']; 
    $con->query($query);   
    $query = 'UPDATE `userlogin`.`mealplan` SET `'.$_POST['mealday'].$_POST['mealtype'].'Note` = "'.$_POST['mealnote'].'" WHERE `UserID` ='.$_COOKIE['UserID']; 
    $con->query($query); 
    $con = null;

?>
<html><body onload="window.location.href='mealedit.php?<?php echo 'day='.$_POST['mealday'].'&meal='.$_POST['mealtype'];?>'"></body></html>