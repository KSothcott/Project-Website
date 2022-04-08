<script>

function editMeal()
{
    let name = document.getElementById("mealname").value;
    
    document.getElementById('mealname').value = name;
    
    
    if(name==="")
    {
        alert("Meal name not entered"); 
        document.getElementById('mealname').focus();
        return;
    }
    
    let note = document.getElementById("mealnote").value;

    document.getElementById('mealnote').value = note;
    
    document.getElementById('f1').submit();
}
</script>

<?php

    include_once('cookiecheck.php');
    include_once('server.php');

?>
<html>
<head>
<title>Edit Meal</title>
<link rel="icon" type="image/x-icon" href="favicon.ico.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    .icon-bar {
    width: 100%;
    background-color: #7bc9c9;
    overflow: auto;
    }

    .icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 40px;
    text-decoration: none;
    cursor: pointer;
    }

    .icon-bar a:hover {
    background-color: #94a0a1;
    }

    
    .heading {
        float: center;
		font-size: 34px;
		margin: 20px;
		text-align: center;
        font-family: sans-serif;
    }
    
    .button {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        text-decoration: none;
        color: black;
        font-family: sans-serif;
        font-size: 15pt;
        margin: 20px;
        text-align: center;
    }
    
    .button:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    
    .text {
        margin: 20px;
        
    }
    .textbox {
        margin: 20px;
        padding: 10px;
        font-size: 12pt;
        width: 60%;
    }
    
    .label {
        margin: 20px;
        font-size: 15pt;
    }
    
</style>
</head>
<body style="font-family: sans-serif; background-color: white;">

    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="http://192.168.1.95/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="http://192.168.1.95/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>
    
    <div class="heading">
    <p>Meal Edit</p>
    </div>
    
<?php
    
    $column_name = $_GET['day'].$_GET['meal'].'Name';
    $column_note = $_GET['day'].$_GET['meal'].'Note';

    $query = 'SELECT `'.$column_name.'`, `'.$column_note.'` FROM `mealplan` WHERE `UserID` = '.$_COOKIE['UserID'];
    $result = $con->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    
        echo '<form action="mealeditprocess.php" method="post" id="f1" name="f1">';
        echo '<input type="hidden" form="f1" value="'.$_GET['day'].'" name="mealday" />';
        echo '<input type="hidden" form="f1" value="'.$_GET['meal'].'" name="mealtype" />';
?>

    <a href="mealplanner.php" class="button">Save changes</a>
    <br /><br /><br />
    
<?php
        echo '<label class="label">Meal Name</label>';
        echo '<br />';
        echo '<input class="textbox" type="text" name="mealname" id="mealname" placeholder="Meal name" form="f1" value="'.$row[$column_name].'" onchange="document.getElementById('."'f1'".').submit()"/>';
        echo '<br /><br />';
        echo '<label class="label">Notes</label>';
        echo '<br /><p style="font-size: 10pt;"> </p>';
        echo '<label class="label" style="font-size: 12pt;">Here you can add any notes, ingredients and recipe links for your meal</label>';
        echo '<br />';
        echo '<textarea class="textbox"  style="height: 200px; width: 60%; font-family: sans-serif" type="submit" name="mealnote" id="mealnote" placeholder="Notes" form="f1" onchange="document.getElementById('."'f1'".').submit()"/>'.$row[$column_note].'</textarea>';
        echo '</form>';

?>

</body>
</html>