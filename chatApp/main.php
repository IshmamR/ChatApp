<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width initial-scale=1.0">
			<title>ChatApp</title>
			<script src="https://kit.fontawesome.com/b3a4cf9dc1.js" crossorigin="anonymous"></script>
			<link rel="stylesheet" type="text/css" href="main.css">
		</head>
		<body>
				<div class="main">
						<div class="head">
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

				<!-- The core Firebase JS SDK is always required and must be listed first -->
				<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>
				<!-- Include Firebase database -->
				<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-database.js"></script>
				<!-- TODO: Add SDKs for Firebase products that you want to use
		 		https://firebase.google.com/docs/web/setup#available-libraries -->
				<script src="main.js"></script>
		</body>
</html>