<!DOCTYPE html>
<html>
<head>
	<title>TS3 Szerver konfigurálás és weboldal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="page" align="center">
		<div class="content" align="center">
<form action="email.php" method="post">
Vezetéknév*: <br><input type="text" name="first_name" required><br>
Keresztnév*: <br><input type="text" name="last_name" required><br>
Email*: <br><input type="text" name="email" required><br>
Szobák*: (spacer nem számít bele)<br><select name="szobak" required>
	<option>Nem kell szobákat csinálni.</option>
	<option>Kevesebb mint 100 szoba | 250HUF</option>
	<option>Kevesebb mint 250 szoba | 500HUF</option>
	<option>Több mint 250 szoba | 700HUF</option>
</select><br>
Rangok konfigurálása*:<br><select name="rangok" required>
	<option>Nem kell rangokat csinálni.</option>
	<option>Kevesebb mint 20 rang | 300HUF</option>
	<option>Kevesebb mint 40 rang | 500HUF</option>
	<option>Több mint 40 rang | 700HUF</option>
</select><br>
Üzenet:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>
			</form>
		</div>
	</div>
</body>
</html>