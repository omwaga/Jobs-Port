@component('mail::message')
# Dear Sir/Madam

Your job post on {{ config('app.name') }} has been updated successfully.

@component('mail::button', ['url' => ''])
View Your Posted Jobs
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent