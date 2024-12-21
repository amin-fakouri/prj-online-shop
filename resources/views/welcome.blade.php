<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_register') }}">ثبت نام</a>
    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_login') }}">ورود به سیستم</a>

    </body>
</html>
