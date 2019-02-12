@component('mail::message')
# Email Reset Password

klik link berikut untuk merubah password. <a href="{{env('APP_URL')}}/reset/{{$user['email']}}/{{$user['token']}}">Click Here</a>

Regards,<br>
Support Beroken Jawa Mail
@endcomponent
