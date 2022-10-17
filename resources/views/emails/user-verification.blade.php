@component('mail::message')
You have successfully Registered With Connect.
Verify Your Email Now

@component('mail::button', ['url' => $url])
Verify Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
