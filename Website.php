<?php
include_once('cookiecheck.php');
?>

<html>
<head>
<title>Homepage</title>
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
        margin: 50px;
        text-align: center;
        cursor: pointer;
    } 
       
    .button:hover {
    background-color: #d1f1f1;
    transition: all 0.4s ease;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.10), 0 17px 50px 0 rgba(0,0,0,0.10);
    }
    
</style>
</head>
<script>
function clearAlert() {
  var alert;
  if (confirm("Are you sure you want to clear the existing meal plan?")) {
    window.location.href = 'clearmealplan.php';
  } else {
    window.location.href = 'website.php';
  }
  document.getElementById("alert").innerHTML = alert;
}
</script>
<body>
    
    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="http://192.168.1.95/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="http://192.168.1.95/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>
    
    <div class="heading">
    <p>Homepage</p>
    </div>
    
    <img src="Meal_Planner_Logo.png" style="float: right;width: 300px;height: 300px;padding-right: 50px;"/>
    <br /><br />
    <a href="mealplanner.php" class="button">View current meal plan</a>
    <br /><br />
    <button class="button" onclick="clearAlert()">Create a new meal plan</button>
    <br /><br />
    <a href="shoppinglist.php" class="button">Create or edit a shopping list</a>

</body>
</html>