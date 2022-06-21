@component('mail::message')
# Visitor Message
Some Visitor Left a message:
@component('mail::table')
|               |               |
| ------------- |:-------------:|
| Firstname:    |{{ $firstname }}|
| Secondname:   |{{ $secondname }}|
| Phonenumber:  |{{ $phonenumber }}|
| Country:      |{{ $country }}|
| Email:        |{{ $email }}|
| Subject:      |{{ $subject }}|
| Message:      |{{ $message }}|




@endcomponent
@component('mail::button', ['url' => ''])
View Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
