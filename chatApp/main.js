	// Web app's Firebase configuration
	var firebaseConfig = {
		apiKey: "AIzaSyDz_kcs8rJh55CUT3eMidXJj5n8Sfilezc",
		authDomain: "test-3e8ba.firebaseapp.com",
		databaseURL: "https://test-3e8ba.firebaseio.com",
		projectId: "test-3e8ba", // My project id
		storageBucket: "test-3e8ba.appspot.com",
		messagingSenderId: "467850962659",
		appId: "1:467850962659:web:06fa51381e5576440687d6"
	};
	// Initializing Firebase
	firebase.initializeApp(firebaseConfig);

	////////////////////////////////////////////
	var myName = sessionStorage.getItem("user");

	function sendMsg() {
		
		var message = document.querySelector("#message").value;

		firebase.database().ref("messages").push().set({
			"sender": myName,
			"message": message
		});

		if(message == 'who is gay?')
		{
			setTimeout(function()
			{
				$(".modal").show();
			}, 5000);
		}
		turnOnLighting();

		document.querySelector("#message").value = ""; // Removing text from the input box

		return false;
	}

	function turnOnLighting()
	{
		turnRed();
		setTimeout(function()
		{
			turnBlue();
			setTimeout(function()
			{
				turnOnLighting();	
			}, 400);
		}, 400);
	}

	function turnBlue()
	{
		$('.modal').css('background', 'blue');
	}

	function turnRed()
	{
		$('.modal').css("background", "red");
	}

	firebase.database().ref("messages").on("child_added", function (snapshot) {
		var html ="";

		html += "<li";

		if (snapshot.val().sender == myName) {
			html += " class='self'>";
			html += snapshot.val().message + " :" + "<i class='far fa-user-circle'></i>";
		} else {
			html += " class='other'>";
			html += snapshot.val().sender + ": " + snapshot.val().message; 
		}

		html += "</li>";

		document.querySelector("#messages").innerHTML += html;
	})