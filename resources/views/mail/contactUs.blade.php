<x-mail::message>
# {{ $data['subject'] }}

<h1>From your user: {{ $data['firstName'] }} {{ $data['lastName'] }} </h1>
<h3>{{ $data['subject'] }}</h3>
{{ $data['message'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
