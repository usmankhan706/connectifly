@component('mail::message')
Someone Followed you

Check profile.

@component('mail::button', ['url' => route("company.profile")])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
