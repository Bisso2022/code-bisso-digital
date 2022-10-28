@component('mail::message')
# Introduction

Bonjour Monsieur JADOR,<br>
Nous avons reçu votre message et nous communiquerons avec
 vous dans les heures qui viennent.

@component('mail::button', ['url' => $url])
Accéder au site web
@endcomponent

Merci de ne pas répondre à ce mail.<br>
Pour tous besion écrivez à bissodigital@gmail.com votre agence web<br><hr>
{{ config('app.name') }}
@endcomponent
