<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>
@include('layouts.nav')

@yield('main')

<div class="clearfix"></div>

@include('layouts.footer')
{{--<button class="hideSideBar" id="hideSideBar">Hide</button>--}}
{{--<button class="showSideBar" id="showSideBar">show</button>--}}
<button class="changeBg" id="changeBg">change <br> background</button>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/test.js') }}"></script>
</body>
</html>
