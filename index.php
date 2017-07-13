<?php
    session_start();
	include "./php/util/session.php";
?>

<!-- Manuale utente disponibile in ./html/howtoplay.html -->

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<title>Stick Bridges</title>

		<link rel="shortcut icon" type="image/png" href="./css/images/favicon.ico" />
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="./css/game.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- google.com/fonts -->

		<!-- JavaScript -->
		<script type="text/javascript" src="./js/ajaxManager.js"></script>
		<script type="text/javascript" src="./js/game.js"></script>
		<script type="text/javascript" src="./js/timer.js"></script>
		<script type="text/javascript" src="./js/statistics.js"></script>
		<script type="text/javascript" src="./js/playground.js"></script>
		<script type="text/javascript" src="./js/popups.js"></script>
		<script type="text/javascript" src="./js/htmlElements.js"></script>
		<script type="text/javascript" src="./js/toolsDivs.js"></script>
		<script type="text/javascript" src="./js/player.js"></script>
		<script type="text/javascript" src="./js/blocks.js"></script>
		<script type="text/javascript" src="./js/sticks.js"></script>
		<script type="text/javascript" src="./js/utility.js"></script>
    </head>

    <body onLoad="intro()" class="playground">
        <div class="popup" id="welcome_popup">
			<h1 id="logo">Stick Bridges</h1>

			<?php
				if(!isLogged()) echo	'<div class="form" id="login_form">
											<form method="post">
												<label>Username: <input type="text" id="username" name="username"></label>
												<label>Password: <input type="password" id="password" name="password"></label>
												<button type="button" name="login" onclick="AjaxManager.prepareLogin();">Login</button>
											</form>
										</div>
										<div class="tools" id="prelogin_tools">
											<p>New user? <a id="register_link" href="#" onclick="registerPopup();">Create an account!</a></p>
										</div>
										';
					else echo	'<p class="response" id="We">Welcome ' . $_SESSION['username'] . ', press ENTER to play!</p>
								<div class="tools">
									<a id="logout_link" href="#" onclick="AjaxManager.prepareLogout();">Logout</a>
									- 
									<a id="delete_link" href="#" onclick="AjaxManager.prepareAccountDeletion();">Delete account</a>
								</div>	
								';
			?>
        </div>

		<footer>
			<p>
				<a href="./html/howtoplay.html">How to play</a>
				 - 
				<a href="./html/terms.html">Terms of Service</a>
				 - 
				<a href="./html/privacy.html">Privacy</a>
			</p>
		</footer>
    </body>
</html>