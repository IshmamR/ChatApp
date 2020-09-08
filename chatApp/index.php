<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>ChatApp</title>
	<script src="https://kit.fontawesome.com/b3a4cf9dc1.js" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
			background-color: #111111;
			font-family: arial, sans-serif;
		}
		.login {
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			max-height:60%;
			width:50%;
			background-color:#EAEAEA;
			display: flex;
			justify-content: center;
			align-content: center;
		}
		.login form {
			width: 95%;
			height: 30%;
		}
		#username {
			width: 90%;
			height: 1.5rem;
		}
		#enter {
			float: center;
			margin: 1rem auto;
			padding: 10px;
			background-color: #5555DD;
			border-radius: 5px;
			border: none;
		}
		#enter:hover {
			background-color: #4444BB;
			color: #EEE;
		}
	</style>
</head>
<body>
	<div class="login">
		<form action="main.php" onsubmit="submitted()" method="post">
			<h2>Enter your name:</h2>
			<input id="username" type="text" name="username" autocomplete="off">
			<button id="enter" type="submit" name="submit">Enter</button>
		</form>
	</div>
	<script type="text/javascript">
		var name = "";
		function submitted () {
			var name = document.querySelector("#username").value;
			// sending username in session storage(so the user is kept logged in even after reloading)
			sessionStorage.setItem("user", name); 
		}
	</script>
</body>
</html>