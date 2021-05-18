@component('mail::message')
# Bonjour {{ $mailData['name'] }}

Votre compte à été crée avec succès !!!

Cliquez sur le lien pour l'activé

@component('mail::a', ['url' => $mailData['msg']])
Validation de compte
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
