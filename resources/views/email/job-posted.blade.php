@component('mail::message')
# Dear Sir/Madam

Your job post has been published on The NetworkedPros  successfully.<br>
Thank you for choosing us for your recruitment.

@component('mail::button', ['url' => ''])
View Your Posted Jobs
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
