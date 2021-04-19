@component('mail::message')
Hello Admin.<br>
You have received message from Contact Form.<br>

Full Name: {{ $full_name }}<br>
Email: {{ $email }}<br>
Mobile Number: {{ $contact }}<br><br>
Message: {{ $message }}

{{ config('app.name') }}
@endcomponent

