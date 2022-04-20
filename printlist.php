<html><body>

<center><h1>Shopping List</h1></center>

<p style="font-size: 14pt; font-weight:bold">

<?php 
    
    $filename = './lists/'.$_GET['list']; 

    $fhand = fopen($filename,"r"); 
        
    echo fgets($fhand);
    
    fclose($fhand);
?>

</p>



</body></html>