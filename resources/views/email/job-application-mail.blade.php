@component('mail::message')
# Dear {{auth()->user()->name}}

Your job application has been submitted to the employer successfully.<br>
Thank you for choosing {{ config('app.name') }} for your job application

@component('mail::button', ['url' => ''])
Browse Latest Jobs
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
