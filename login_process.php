<?php


//echo 'Username is '.$_POST['username'].'<br /> password is '.$_POST['password']; 

if(!strcmp("user",$_POST['username']) && !strcmp('admin',$_POST['password']))
{
    
     echo '<body onload="window.location='."'website.php'".'"></body>';
}
else echo '<body onload="window.location='."'login.php'".'"></body>';


?>