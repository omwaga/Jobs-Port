@component('mail::message')
# Dear {{$data['firstname'] ?? 'Sir/Madam'}},
##Welcome to The Networked Pros.

Your registered email address is {{auth()->guard('employer')->user()->company_email ?? ''}}<br>
🎉 Great Job!  The Networked Pros is a career platform for both job seekers and employers.

As an employer after creating your profile, you are able to manage your recruitment from one place all the way from advertising a job, shortlisting, interviewing to handling employment contracts.

Does your Organization have open positions?, Post your jobs now for free!

##Benefits of recruiting through The NetworkedPros
<ul>
	<li>You will gain access to 1000s of vetted CVs to fill vacancy in their organization for permanent and short-term jobs throughout East Africa</li>
	<li>You will gain access to ready job description templates to help you recruit faster and professionally.</li>
	<li>You will be able to advertise jobs through our platform</li>
	<li>You will be able to receive and process job applications through our platform</li>
	<li>You will regularly get useful insights from our monthly e-magazine</li>
</ul>  
If you are having problems resetting your password, please contact our helpdesk at careers@thenetworkedpros.com

@component('mail::button', ['url' => 'https://thenetworkedpros.com/login'])
Complete Your Profile Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
