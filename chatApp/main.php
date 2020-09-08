<?php
	// session_start();
	// $_SESSION['user'] = 'name';
	// if(isset($_POST['submit'])) {
	// 	$_SESSION['user'] = $_POST['username'];
	// }
	// if (!isset($_SESSION['user']) || !isset($_POST['submit'])) {
	// 	header('Location: index.php');
	// }
?>
<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width initial-scale=1.0">
			<title>ChatApp</title>
			<script src="https://kit.fontawesome.com/b3a4cf9dc1.js" crossorigin="anonymous"></script>

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="main.css">
			<!-- To check user before dom load -->
			<script type="text/javascript">
				if (localStorage.getItem('user') === null) {
					window.location.replace('index.php');
				}
			</script>
		</head>
		<body class="bg-primary">
			<div class="text-center text-light container-fluid pt-3">
				<h4>Logged in as <script>document.write(localStorage.getItem('user'));</script> </h4>
			</div>

			<div class="hero">
				<div class="main bg-light">
					
					<div class="head bg-white shadow">
						<div class="logo text-dark">
							<span>ChatApp</span>
						</div>
						<div class="links">
							<span>
								<i class="fas fa-ellipsis-h hide" /></i>
								<i class="fas fa-ellipsis-v show" /></i>
							</span>
							<ul id="link">
								<li>About</li>
								<li>Contact</li>
								<li>Report</li>
							</ul>
						</div>
					</div>

					<div class="bod bg-light">
						<ul id="messages">
							<!-- <li class="other">Hi</li>
							<li class="other">hello</li>
							<li class="other">sup</li>
							<li class="self">awesome</li>
							<li class="other">hehe</li> -->
						</ul>
					</div>
					
					<div class="sender bg-white shadow-lg">
						<form onsubmit="return sendMsg();">
							<input class="form-field" id="message" placeholder="Enter messages" autocomplete="off" />
							<button class="btn btn-primary px-1 py-0" type="submit">
								<i class="fas fa-comment-dots fa-lg"></i>
							</button>
						</form>
					</div>

				</div>
			</div>
			
			<footer class="footer bg-dark text-light text-center">
				Developed by Ishmam &copy;2020
			</footer>

				<!-- The core Firebase JS SDK is always required and must be listed first -->
				<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>
				<!-- Include Firebase database -->
				<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-database.js"></script>
				<!-- TODO: Add SDKs for Firebase products that you want to use
		 		https://firebase.google.com/docs/web/setup#available-libraries -->
				<script src="main.js"></script>
				<script type="text/javascript">
					function scrolled() {
						var items = document.querySelector("#messages");
						items.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
					}
					window.onload = (event) => {
						// console.log('page is fully loaded');
						setTimeout(scrolled, 5000);
						// To check user after DOM load
						if (localStorage.getItem('user') === null) {
							window.location.replace('index.php');
						}
					};
				</script>
		</body>
</html>