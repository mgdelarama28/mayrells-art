@component('mail::message')
# {{ config('app.name') }}

{{ $message->message }}

Thanks,<br>
{{ $message->name }}
@endcomponent
