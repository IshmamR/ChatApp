<?php
	session_start();
	// $_SESSION['user'] = 'name';
	if(isset($_POST['submit'])) {
		$_SESSION['user'] = $_POST['username'];
	}
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
		</head>
		<body>
			<div class="text-center text-light container-fluid pt-3">
				<h4>Logged in as <script>document.write(localStorage.getItem('user'));</script> </h4>
			</div>
				<div class="main">
						<div class="head shadow">
								<div class="logo">
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
						<div class="bod">
								<ul id="messages">
										<!-- <li class="other">Hi</li>
										<li class="other">hello</li>
										<li class="other">sup</li>
										<li class="self">awesome</li>
										<li class="other">hehe</li> -->
								</ul>
						</div>
						<div class="sender">
								<form onsubmit="return sendMsg();">
									<input id="message" placeholder="Enter messages" autocomplete="off">
									<button type="submit"><i class="fas fa-comment-dots fa-lg"></i></button>
								</form>
						</div>
				</div>

				<div class="modal">

					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">HaHaHaHa...</h4>
							</div>

							<div class="modal-body">
								<p>Ishmam gayyyyyy</p>
								<img src="https://i.pinimg.com/originals/70/8d/f3/708df39ab1a928a09d5166a8d4401650.jpg" width="50%" height="auto">
							</div>
						</div>
					</div>
					
				</div>

				<!-- The core Firebase JS SDK is always required and must be listed first -->
				<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>
				<!-- Include Firebase database -->
				<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-database.js"></script>
				<!-- TODO: Add SDKs for Firebase products that you want to use
		 		https://firebase.google.com/docs/web/setup#available-libraries -->
		 		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
				<script src="main.js"></script>
				<script type="text/javascript">
					function scrolled() {
						var items = document.querySelector("#messages");
						items.scrollIntoView(false);
					}
					setInterval(scrolled, 5000);
				</script>
		</body>
</html>