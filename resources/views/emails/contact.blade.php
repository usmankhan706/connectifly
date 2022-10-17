@component('mail::message')
Contact Us

{{ $details->message }}

From: Mr/Mrs {{ $details->name }}
@component('mail::button', ['url' => route("home")])
Button Text
@endcomponent
@endcomponent
