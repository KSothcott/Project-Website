<script>
function check_passwords_match()
{
    var  p1 = document.getElementById("password").value;
    var p2 = document.getElementById("password2").value;
    if(!(p1===p2)) 
     { alert("Passwords not equal");
        document.getElementById('password').value = "";
        document.getElementById('password2').value= "";
        document.getElementById('password').focus();
        return;
     }    
}

function create_new_user()
{
    let first = document.getElementById("firstname").value;
    first = first.toUpperCase();
    document.getElementById('firstname').value = first;
    
    
    if(first==="")
    {
        alert("First Name Not Entered"); 
        document.getElementById('firstname').focus();
        return;
    }
    
  document.getElementById('f1').submit();  
}
</script>

<html>
<head>
<title>Create an Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
    
    a.button {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        text-decoration: none;
        color: black;
        font-family: sans-serif;
        margin: 20px;
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
    <p>Create an Account</p>

    </div>
     <form action="#####" method="post" id="f1" name="f1">

        <label style="font-family: sans-serif;">First name</label>
        <input type="text" name="firstname" id="firstname" placeholder="First name" form="f1"/> <br/><br/>
       
        <label style="font-family: sans-serif;">Last name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Last name" form="f1"/> <br/><br/>
         
        <label style="font-family: sans-serif;">Create a username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" form="f1"/> <br/><br/>

        <label style="font-family: sans-serif;">Create a password</label>
        <input type="password" name="password" placeholder="Enter your password" form="f1"/><br/><br/> 
        
        <label style="font-family: sans-serif;">Re-enter your password</label>
        <input type="password2" name="password2" placeholder="Re-enter your password" form="f1"/><br/><br/> 

        <button onclick="document.getElementById('f1').submit()">Create account</button>

     </form>
     
     
    <br /><br />
    <a href="http://192.168.1.95/kathleen/login.php" class="button">Already have an account? Click here to login</a>   
</body>
</html>