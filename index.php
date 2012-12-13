<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>PW</title>
	<script>
		function login(){
			var xhr = new XMLHttpRequest(),
				sent = new FormData(),
				form = document.getElementById("login");
			
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					document.getElementById("text").innerHTML = xhr.responseText;
					if(xhr.responseText == "Incorrect username or password"){
						setTimeout(fade_out_2, 2500);
						form.username.value = "";
						form.password.value = "";
					}
					else{
						setTimeout(fade_out, 2500);
					}
				}
			}
			
			xhr.open("POST", "login.php", true);
			sent.append("username", form.username.value);
			sent.append("password", form.password.value);
			xhr.send(sent);
		}
		function fade_out() {
  			document.getElementById("text").innerHTML = "";
			document.getElementById("text").innerHTML = "<h2>MENU ABOUT ARTIKEL CONTACT LOGOUT</h2>";
		}
		function fade_out_2() {
  			document.getElementById("text").innerHTML = "";
		}
	</script>
    <style>
		* {
			margin: 0 auto;
		}
		#container{
			margin: 20px auto;
			width: 60%;
			border-left: solid 1px;
			border-right: solid 1px;
			height: 1000px;
			margin-top: 0px;
			margin-bottom: 0px;
		}
		header{
			width: 100%;
			display: block;
			background-color: green;
			padding: 10px 0px;
			height: 50px;
		}
		footer{
			width: 100%;
			display: block;
			background-color: green;
			position: relative;
			bottom: 0;
			padding: 10px 0px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		include("header.php");
	?>
    <div id="container">
    Sesuatu
    </div>
    <?php
		include("footer.php");
	?>
</body>
</html>