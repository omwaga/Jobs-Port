<!DOCTYPE html>
<html>
<head>
	<title>Welcome Email</title>
</head>

<body>

	<p>Dear {{$data['firstname'] ?? 'Sir/Madam'}},</p>
	<h2 style="color:#005691">Welcome to The Networked Pros.</h2>

	<p>Your registered email address is {{$data['email'] ?? ''}}<br>
		🎉 Great Job!  The Networked Pros is a career platform for both job seekers and employers.

		When as an employer you create a profile, you are able to manage your recruitment from one place all the way from advertising a job, shortlisting, interviewing to handling employment contracts.

		Does your Organization have open positions?, Post your jobs now for free!<p>

			<a href="https://thenetworkedpros.com/login" ><button style="background-color:#FF0000; color: #fff">Complete Your Profile Now</button></a>

			<h4 style="color:#005691">Benefits of recruiting through The Networked Pros</h4>
			<p>Benefits of recruiting through The Networked Pros</p>
			<ul>
				<li>You will gain access to 1000s of vetted CVs to fill vacancy in their organization for permanent and short-term jobs throughout East Africa</li>
				<li>You will gain access to ready job description templates to help you recruit faster and professionally.</li>
				<li>You will be able to advertise jobs through our platform</li>
				<li>You will be able to receive and process job applications through our platform</li>
				<li>You will regularly get useful insights from our monthly e-magazine</li>
			</ul>  
			<p>If you are having problems resetting your password, please contact our helpdesk at careers@thenetworkedpros.com</p>

			<p>With kind regards,</p>

			<p>The Networked Pros</p>

			<hr>
			<p class="text-danger"><b>Kind Regards</b></p>
			<p  style="color: saddlebrown"><b>Human Resource Officer</b></p>
			<p  style="color: saddlebrown"><b>TheNetWorkedPros, Nairobi- Kenya</b></p>
			<p  style="color: saddlebrown"><b>Njema Court, Suit R2</b></p>
			<p  style="color: saddlebrown"><b>Westlands, Raptha Road</b></p>
		</body>

		</html>