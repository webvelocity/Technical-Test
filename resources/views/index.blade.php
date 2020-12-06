<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body>

{{-- Latest Properties--}}
@include('partials.header')
{{-- ./Latest Properties--}}


{{-- Latest Properties--}}
@include('partials.propertyCard')
{{-- ./Latest Properties--}}


{{-- Shared OWNERSHIP  --}}
@include('partials.sharedOwnership')
{{-- ./Shared OWNERSHIP  --}}


{{-- Latest News--}}
@include('partials.latestNews')
{{-- ./Latest News--}}


{{-- Contact Form --}}
@include('partials.contact-form')
{{-- ./Contact Form --}}


{{-- Footer --}}
@include('partials.footer')
{{-- ./Footer--}}

<script src="{{ asset('js/jquery.js') }}"></script>

<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
