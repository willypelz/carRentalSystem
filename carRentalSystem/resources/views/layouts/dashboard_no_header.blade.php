<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard Car Rental Management System') }}</title>


    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('modules/dashboard/images/favicon.png') }}">
    <link href="{{ asset('modules/dashboard/css/style.css') }}" rel="stylesheet">


</head>
<body class="h-100">
      @yield('content')
</body>
</html>
