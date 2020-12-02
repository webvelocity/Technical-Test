<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body>
<div class="container">
    <div class="row">

        {{-- Property Card --}}
        <div class="col property-card">
{{--            <span class="feature-tag">{{ $property->feature }}</span>--}}
            <img src="https://via.placeholder.com/299x217" alt="" class="w-100">
            {{--   <h4>{{$property->title}}</h4>--}}
            <p>
                {{--  {{ ucfirst($property->address), ucfirst($property->suburb) }}--}}
            </p>
            Share Price: {{-- {{$property->share_price}} --}}
            Min Deposit: {{-- {{$property->min_deposit}} --}}

            <div class="row amenities">>
                <div class="col-md-4">
                    <img src="" alt="" class="d-block">
                    {{--                    <span>{{$property->amenity}}</span>--}}
                </div>
            </div>

            <div class="row cta">
                <div class="col">
                    {{--                    <a href="{{$property->slug}}"></a>--}}
                </div>
                <div class="col">
                    {{--                    <a href="{{share($property->slug)}}"></a>--}}
                </div>
            </div>
        </div>
        {{-- ./Property Card --}}

    </div>
</div>

</body>

</html>
