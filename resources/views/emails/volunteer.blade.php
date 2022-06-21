@component('mail::message')
# Visitor Message

Some Visitor Left a message:
@component('mail::table')
|               |               |
| ------------- |:-------------:|
| Firstname:    |{{ $first_name }}|
| Secondname:   |{{ $last_name }}|
| Phonenumber:  |{{ $phone_number }}|
| Country:      |{{ $country }}|
| Email:        |{{ $email }}|
| Message:      |{{ $message }}|
@endcomponent


@component('mail::button', ['url' => 'http://127.0.0.1:8000/admin/volunteer'])
View Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
