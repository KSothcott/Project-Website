<head>
	<title>Shopping List</title>
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
	.header {
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
<body style="background-color:#e6ffff;">
	<div class="header">
	<p>Shopping List</p>
	</div>
	<div class="app">
    <a href="http://192.168.1.95/kathleen/website.php">Click here to return home</a>
    <p>Type each item in the text box, then click Add Item <br /> Click on an item in the list to remove it</p>
	<input type="text" id="box"/>
	<br/>
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