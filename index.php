<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<meta name="description" content="Logowanie" />
	<meta name="keywords" content="css, odcinek" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>

<body>
<div class='logo'>LOGO</div>

	<div id="container">		
			<form class="login-form" id="form-login" method="post" action="assigner.php">
				<input type="text" name="email" id="email" placeholder="login" onfocus="this.placeholder=''"onblur="this.placeholder='login'">	
				<input type="password" name="password" id="password" placeholder="hasło" onfocus="this.placeholder=''"
				onblur="this.placeholder='hasło'">
				<a href="#" class="reminder">Nie pamiętasz hasła?</a> 
				<div class="alert hidden" id="alert">
					<label id="error">....</label>
				</div>
				<input type="button" name="login_user" id="loggin-button" value="Zaloguj się">
			</form>
	</div>

	
	<div class="footer">STOPKA</div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="validation.js"></script>
</body>
</html>