<head>
	<title>Shopping List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
	function addItem() {
		var newItem = document.createElement("div");
		newItem.innerHTML = document.getElementById("box").value;
		newItem.onclick = removeItem;
		document.getElementById("list").appendChild(newItem)
		saveList();
	}
	function removeItem() {
		document.getElementById("list").removeChild(this);
		saveList();
	}
	function saveList() {
		localStorage.storedList = document.getElementById("list").innerHTML;
	}
	function loadList() {
		document.getElementById("list").innerHTML = localStorage.storedList;
		for(var i = 0; i < list.children.length; i++) {
		list.children[i].onclick = removeItem;
		}
	}
	</script>
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

    .active {
    background-color: #ffffff;
    }
    
    .heading {
        float: center;
		font-size: 34px;
		margin: 20px;
		padding: 10px;
		text-align: center;
        font-family: sans-serif;
	}
	.app {
		height: 600px;
		width: 400px;
		float: center; 
    		padding: 10px; 
    		margin: 20px;
        font-family: sans-serif;
	}
  	input[type="button"] {
   		border: 2px solid black;
        background-color: white;
        font-family: sans-serif;
        padding: 10px;
	}
    a.button {
        border: 2px solid black;
        background-color: white;
        padding: 10px;
        text-decoration: none;
        color: black;
    }
	</style>
</head>
<body>

    <div class="icon-bar">
    <table style="width: 100%;">
    <tr>
    <td style="width 20%"><a href="http://192.168.1.95/kathleen/website.php"><i class="fa fa-home"></i></a></td>
    <td style="width 20%"></td>
    <td style="width 20%"></td>
    <td style="width 20%"></td>
    <td style="width 20%" ><a href="#"><i class="fa fa-gear"></i></a></td>
    </tr>
    </table>
    </div>

	<div class="heading">
	<p>Shopping List</p>
	</div>
    
	<div class="app">
    <a href="http://192.168.1.95/kathleen/website.php" class="button">Click here to return home</a>
    <br /><br />
    <p>Type each item in the text box, then click Add Item <br/><br/> Click on an item in the list to remove it</p>
	<input type="text" id="box" size="70px"/>
	<br/><br/>
	<input type="button" value="Add item" onclick="addItem();"/>
	<br/>
	<div id="list"></div>
	</div>
    
	<script>
		if(localStorage.storedList) {
		loadList();
		}
	</script
</body>
</html>