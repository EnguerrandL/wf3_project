@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de {{ $data['nom'] }} ({{ $data['email'] }})

### Objet :  {{ $data['sujet'] }}


Message :

{{ $data['message'] }}



#### Envoyer depuis le site Zen et Beauté
@endcomponent
