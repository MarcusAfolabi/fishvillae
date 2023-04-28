<x-mail::message>
# Hi there,

<p>Thank you for subscribing! Please click the link below to verify your email address:</p>

<!-- <a href="{{ $url }}">{{ $url }}</a> -->

<x-mail::button :url="{{ $url }}">
Verify Email
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
