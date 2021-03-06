<?php
include_once('cookiecheck.php');
?>

<html>
<head>
<title>Homepage</title>
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
    
    .button1 {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        text-decoration: none;
        color: black;
        font-family: sans-serif;
        font-size: 15pt;
        margin: 0px;
        text-align: center;
        position: absolute;
        left: 40%;
        right: 40%; 
        cursor: pointer;      
    }
    
    .button1:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    
    .welcome {
        font-family: sans-serif;
        font-size: 15pt;
        margin: 50px;
    }
    
</style>
</head>
<script>
function clearAlert() {
  var alert;
  if (confirm("Are you sure you want to clear the existing meal plan?")) {
    window.location.href = 'https://brendansothcott.co.uk/kathleen/clearmealplan.php';
  } else {
    window.location.href = 'https://brendansothcott.co.uk/kathleen/website.php';
  }
  document.getElementById("alert").innerHTML = alert;
}
</script>
<body style="background-color: white;">
    
    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="https://brendansothcott.co.uk/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="https://brendansothcott.co.uk/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>
    
    <div class="heading">
    <p>Homepage</p>
    </div>
    
    <img src="Meal_Planner_Logo.png" style="float: right;width: 300px;height: 300px;padding-right: 50px;"/>
    <br /><br />
    
    <p class="welcome">Welcome <?php
    $query = 'SELECT * FROM `userinfo` WHERE `UserID` = '.$_COOKIE['UserID'];
    $result = $con->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo $row['FirstName'];
    echo " ";
    echo $row['LastName']?>
    
    <a href="https://brendansothcott.co.uk/kathleen/mealplanner.php" class="button1">View current meal plan</a>
    <br /><br /><br /><br /><br /><br />
    <a class="button1" onclick="clearAlert()">Create a new meal plan</a>
    <br /><br /><br /><br /><br /><br />
    <a href="https://brendansothcott.co.uk/kathleen/shoppinglist.php" class="button1">Create or edit a shopping list</a>

</body>
</html>