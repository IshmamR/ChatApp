<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>

<!-- Include Firebase database -->
<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-database.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDz_kcs8rJh55CUT3eMidXJj5n8Sfilezc",
    authDomain: "test-3e8ba.firebaseapp.com",
    databaseURL: "https://test-3e8ba.firebaseio.com",
    projectId: "test-3e8ba", // My project id
    storageBucket: "test-3e8ba.appspot.com",
    messagingSenderId: "467850962659",
    appId: "1:467850962659:web:06fa51381e5576440687d6"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var myName = prompt("Enter your name.");

  function sendMsg () {
    
    var message = document.querySelector("#message").value;

    firebase.database().ref("messages").push().set({
      "sender": myName,
      "message": message
    });

    return false;
  }

  firebase.database().ref("messages").on("child_added", function (snapshot) {
   var html ="";

   html += "<li>";

   html += snapshot.val().sender + ": " + snapshot.val().message; 

   html += "</li>";

   document.querySelector("#messages").innerHTML += html;

  })

</script>

<form onsubmit="return sendMsg();">
  <input id="message" placeholder="Enter messages" autocomplete="off">

  <input type="submit">
</form>

<ul id="messages">
  
</ul>