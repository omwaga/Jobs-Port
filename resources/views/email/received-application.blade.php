@component('mail::message')
# Dear sir/Madam

You have a new job application from {{auth()->user()->name}} on {{ config('app.name') }}.<br>
Thank you for choosing {{ config('app.name') }} for your recruitment

@component('mail::button', ['url' => ''])
View Applications
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
