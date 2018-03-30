<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OAuth Access Token</title>
</head>
<body>
	<style>
		input {
			width:400px;
		}
	</style>
	<a href="index.html">Google OAuth Login</a>
	<form action="https://www.googleapis.com/oauth2/v4/token" method="post" enctype="application/x-www-form-urlencoded">
		code : <input type="text" name="code=" value="<?=$_GET['code']?>"><br>
		client_id : <input type="text" name="client_id" value="206336503965-3ottss72e57hf92efm9ra3b654d8qgug.apps.googleusercontent.com"><br>
		client_secret : <input type="text" name="client_secret" value="yJ0yoiFbJ0YjyE0kAkxi81at"><br>
		redirect_uri : <input type="text" name="redirect_uri" value="http://localhost:8888/index.php"><br>
		grant_type : <input type="text" name="grant_type" value="authorization_code"><br>
		<input type="submit">
	</form>
</body>
</html>
