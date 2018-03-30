<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google calendar PHP</title>
</head>
<body>
	<style>
		input{
			width: 500px;
		}
	</style>
	<a href="index911.html">Login HTML</a>
	<form action="https://www.googleapis.com/oauth2/v4/token" method="post" enctype="application/x-www-form-urlencoded">
		code : <input type="text" name="code" value="<?=$_GET['code']?>"><br>
		client_id : <input type="text" name="client_id" value="556127455814-12dm4fn3oqgthisl16fcrnlkhno2i021.apps.googleusercontent.com"><br>
		client_secret : <input type="text" name="client_secret" value="BFI2PFxvu6hcbJUlfPq4HQ_-"><br>
		redirect_uri : <input type="text" name="redirect_uri" value="http://localhost:8888/index911.php"><br>
		grant_type : <input type="text" name="grant_type" value="authorization_code"><br>
	<input type="submit">		
	</form>
</body>
</html>

<!-- <?php 

?>

POST /oauth2/v4/token HTTP/1.1
Host: www.googleapis.com
Content-Type: application/x-www-form-urlencoded

code=4/P7q7W91a-oMsCeLvIaQm6bTrgtp7&
client_id=your_client_id&
client_secret=your_client_secret&
redirect_uri=https://oauth2.example.com/code&
grant_type=authorization_code

{
 "access_token": "ya29.GlyJBcpEHLAmd_sJLGeGP5tb6w3ncqz0VreMvx85fTESsmkx6yQEwO0jGK1MtPa2SRH4EdISnPwPmQJOmjimYmPRl9Ga-c1YUZRRCK2iqvZFtk9S-hjMkbzKHF25ig",
 "token_type": "Bearer",
 "expires_in": 3591
}

https://www.googleapis.com/calendar/v3/users/me/calendarList?access_token=ya29.GlyJBcpEHLAmd_sJLGeGP5tb6w3ncqz0VreMvx85fTESsmkx6yQEwO0jGK1MtPa2SRH4EdISnPwPmQJOmjimYmPRl9Ga-c1YUZRRCK2iqvZFtk9S-hjMkbzKHF25ig
 "refresh_token": "1/ZJkpHryRdSfhBFn4HbLih3FNk38avVwEnJoNjPqHiAc"
{
 "kind": "calendar#calendarList",
 "etag": "\"p3208lhm2sarti0g\"",
 "nextSyncToken": "CICKxsLit9kCEhJoZWVuZG9rMUBnbWFpbC5jb20=",
 "items": [
  {
   "kind": "calendar#calendarListEntry",
   "etag": "\"1463615467302000\"",
   "id": "heendok1@gmail.com",
   "summary": "heendok1@gmail.com",
   "timeZone": "Asia/Seoul",
   "colorId": "14",
   "backgroundColor": "#9fe1e7",
   "foregroundColor": "#000000",
   "selected": true,
   "accessRole": "owner",
   "defaultReminders": [
    {
     "method": "popup",
     "minutes": 30
    }
   ],
   "notificationSettings": {
    "notifications": [
     {
      "type": "eventCreation",
      "method": "email"
     },
     {
      "type": "eventChange",
      "method": "email"
     },
     {
      "type": "eventCancellation",
      "method": "email"
     },
     {
      "type": "eventResponse",
      "method": "email"
     }
    ]
   },
   "primary": true,
   "conferenceProperties": {
    "allowedConferenceSolutionTypes": [
     "eventHangout"
    ]
   }
  },
  {
   "kind": "calendar#calendarListEntry",
   "etag": "\"1517426166542000\"",
   "id": "#contacts@group.v.calendar.google.com",
   "summary": "Contacts",
   "timeZone": "Asia/Seoul",
   "colorId": "13",
   "backgroundColor": "#92e1c0",
   "foregroundColor": "#000000",
   "selected": true,
   "accessRole": "reader",
   "defaultReminders": [],
   "conferenceProperties": {
    "allowedConferenceSolutionTypes": [
     "eventHangout"
    ]
   }
  },
  {
   "kind": "calendar#calendarListEntry",
   "etag": "\"1517426166542000\"",
   "id": "ko.south_korea#holiday@group.v.calendar.google.com",
   "summary": "대한민국의 휴일",
   "timeZone": "Asia/Seoul",
   "colorId": "8",
   "backgroundColor": "#16a765",
   "foregroundColor": "#000000",
   "selected": true,
   "accessRole": "reader",
   "defaultReminders": [],
   "conferenceProperties": {
    "allowedConferenceSolutionTypes": [
     "eventHangout"
    ]
   }
  }
 ]
}

-->