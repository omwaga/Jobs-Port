<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<head>
	<title>Verify your Email</title>
</head>
<body>
<h2>Dear {{$user['name']}}</h2>
<br/>
Thank you for creating an account with us. Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<a href="{{url('user/verify', $user->verifyuser->token)}}">Verify Email</a>
<br>
<p class="text-danger"><b>Kind Regards</b></p>
    <p  style="color: saddlebrown"><b>Human Resource Officer</b></p>
            <p  style="color: saddlebrown"><b>Thenetworkedpros, Nairobi- Kenya</b></p>
            <p  style="color: saddlebrown"><b>Njema Court, Suit R2</b></p>
            <p  style="color: saddlebrown"><b>Westlands, Raptha Road</b></p>
</body>
</html>