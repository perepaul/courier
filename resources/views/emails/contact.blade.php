@component('mail::message')
# Holla Admin

Someone contacted you. Detaials are:

**Name : {{$name}}** 

**Subject : {{$subject}}**  

**Message :**

{{$message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
