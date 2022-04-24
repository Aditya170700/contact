@component('mail::message')
    # Introduction

    This is message from {{ $name }}
    {{ $message }}

    Thanks, {{ config('app.name') }}
@endcomponent
