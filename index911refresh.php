<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google calendar refresh token</title>
</head>
<body>
	<form action="https://www.googleapis.com/oauth2/v4/token" method="post" enctype="application/x-www-form-urlencoded">
		<input type="text" name="client_id" value="556127455814-12dm4fn3oqgthisl16fcrnlkhno2i021.apps.googleusercontent.com"><br>
		<input type="text" name="client_secret" value="BFI2PFxvu6hcbJUlfPq4HQ_-"><br>
		<input type="text" name="refresh_token" value="1/ZJkpHryRdSfhBFn4HbLih3FNk38avVwEnJoNjPqHiAc"><br>
		<input type="text" name="grant_type" value="refresh_token"><br>
	<input type="submit">	
	</form>
</body>
</html>

<!-- 
POST /oauth2/v4/token HTTP/1.1
Host: www.googleapis.com
Content-Type: application/x-www-form-urlencoded

client_id=<your_client_id>&
client_secret=<your_client_secret>&
refresh_token=<refresh_token>&
grant_type=refresh_token

 -->