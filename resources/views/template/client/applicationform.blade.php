@component('mail::message')
Hello Admin.<br>
This message is from contact us page.<br>

Full Name: {{ $full_name }}<br>
Email: {{ $email }}<br>
Contact Number: {{ $contact }}<br><br>
Message: {{ $message }}

{{ config('app.name') }}
@endcomponent
