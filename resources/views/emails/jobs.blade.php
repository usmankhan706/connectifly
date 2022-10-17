@component('mail::message')
{{ auth("company")->user()->name }} posted a job.

You can apply now.

@component('mail::button', ['url' => route("company.view", auth("company")->user()->id)])
Apply Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
