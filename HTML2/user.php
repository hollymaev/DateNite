<doctype! html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
    <?php

    include("header.php");

?>
    
    
</body>
<script>
console.log(sessionStorage);
if(sessionStorage.username){
	
	var newdiv = document.createElement("div");
	newdiv.innerHTML = "Hey "+sessionStorage.username+ ". Your password is... "+sessionStorage.password;
	document.body.appendChild(newdiv);
	
}
</script>
</html>
