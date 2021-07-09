@component('mail::message')
# Olá!

Voce recebeu uma nova avaliação!

@component('mail::button', ['url' => ''])
Clique aqui
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
