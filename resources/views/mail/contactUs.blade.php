<x-mail::message>
# {{ $data['subject'] }}

<h1>From your user: {{ $data['first_name'] }} {{ $data['last_name'] }} </h1>
{{ $data['message'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
