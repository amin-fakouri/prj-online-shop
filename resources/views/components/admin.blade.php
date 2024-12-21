<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('/bs/bs.css') }}">
    <link rel="stylesheet" href="{{ asset('/MyStyle/Style.css') }}">
</head>
<body>
{{--    <livewire:layout.navigation />--}}
{{ $slot }}
<script src="{{ asset('/bs/bs.js') }}"></script>
<script src="{{ asset('/alpine/Money_Alpine/alpine_money.js') }}"></script>
<script src="{{ asset('/alpine/Money_Alpine/alpine_money_2.js') }}"></script>
<script src="{{ asset('/MyJs/MyJs.js') }}"></script>
</body>
</html>
