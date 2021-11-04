@component('mail::message')
# Votre rendez-vous sera le

{{ $appointment->app_date }} à  {{ $appointment->app_time }}




{{ config('app.name') }}
@endcomponent
