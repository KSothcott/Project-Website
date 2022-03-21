<?php

    include_once('cookiecheck.php');

?>
<html>
<head>
<title>Meal Planner</title>
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
    font-size: 36px;
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
    
    table {
        margin-left: 50px;
        margin-right: 50px;
        width: 90%;
        font-family: sans-serif;
        border: 2px solid gray;
        border-collapse: collapse;
        
    }
    
    th {
        font-size:  20pt;
        background-color: #b3e6e6;
        border: 1px solid gray;
        border-collapse: collapse;
        width: 12.5%;
        padding: 10px;
    }
    
    td {
        font-size:  17pt;
        background-color: white;
        border: 1px solid gray;
        border-collapse: collapse;
    }
</style>
</head>
<body>
    
    <div class="icon-bar" style="font-family: sans-serif;">
        <a href="http://192.168.1.95/kathleen/website.php" style="font-size: 47px;"><i class="fa fa-home"></i></a> 
        <a style="background-color: #7bc9c9;">  </a> 
        <a style="background-color: #7bc9c9;">My Meal Planner</a> 
        <a style="background-color: #7bc9c9;">  </a>
        <a href="http://192.168.1.95/kathleen/settings.php" style="font-size: 47px;"><i class="fa fa-gear"></i></a> 
    </div>
    
    <div class="heading">
    <p>Meal Planner</p>
    </div>
    
    <table>
    <tr>
        <th style="background-color: white;"></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold;">Breakfast</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold;">Lunch</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
    <tr>
        <td style="background-color: #b3e6e6; text-align: center; padding: 10px; font-weight: bold;">Dinner</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
       
    
    </table>
</body>
</html>