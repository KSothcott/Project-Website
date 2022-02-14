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
	
</head>
<body>
	<div class="header">
	<p>Shopping List</p>
    <a href="http://192.168.1.95/kathleen/website.php">Click here to return home</a>
	</div>
	<div class="app">
    <p>Type each item in the text box, then click Add Item <br /> Click on an item in the list to remove it</p>
	<input type="text" id="box" value="Type here to add a task"/>
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