@component('mail::message')
# Pesan Email Dari {{$data['name']}}

@component('mail::table')
| Name              | Telephone           | Email              | Message            |
| :----------------- |:------------------ | :------------------| :------------------|
| {{$data['name']}} | {{$data['phone']}} | {{$data['email']}} | {{$data['pesan']}} |
@endcomponent

Thanks,<br>
Beroken Jawa
@endcomponent
