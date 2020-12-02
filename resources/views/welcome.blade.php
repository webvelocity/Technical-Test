<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body>
<div class="container">
    <div class="row">
        {{-- Latest Properties--}}

        <div class="col-12">
            <h3 class="text-center my-5">
                Latest Properties
            </h3>
        </div>

        {{-- Property Card --}}
        @foreach($properties as $property)
            <div class="col-md property-card mb-5">
                <div class="property-card__inner">
                    <span class="property-card__feature-tag">{{ $property->feature }}</span>
                    <span class="property-card__feature-tag">Resale</span>
                    <img src="{{ asset('img/'.$property->image) }}" alt="{{$property->title}}"
                         class="w-100 property-card__img">
                    <div class="p-3">
                        <h4 class="property-card__title">{{$property->title}}</h4>
                        <p>
                            {{ ucfirst($property->address), ucfirst($property->suburb) }}
                        </p>
                        {{--                <span>Share Price: {{$property->share_price}}</span>--}}
                        {{--                <span>Min Deposit: {{$property->min_deposit}}</span>--}}
                    </div>


                    <div class="amenities">
                        <div class="col-md-4">
                            <img src="" alt="" class="d-block">
                            <span>{{$property->amenity}}</span>
                        </div>
                    </div>

                    <div class="cta">
                        <div class="col">
                            <a href="{{$property->slug}}">Available</a>
                        </div>
                        <div class="col">
                            {{--                    <a href="{{share($property->slug)}}">Share</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- ./Property Card --}}


        {{-- ./Latest Properties--}}
    </div>
</div>

{{-- Shared Ownership Feature --}}
<div class="container-fluid px-0 my-5" id="shared-ownership-feature">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="{{asset ('img/promo-image.png')}}" alt="What is Shared Ownership" class="w-100">
        </div>
        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
            <h2>
                What is Shared Ownership?
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Morbi leo ipsum, lacinia aliquet faucibus sit amet, ultrices id
                eros. Integer faucibus rhoncus erat, vitae consequat turpis
                consequat a. Suspendisse pulvinar tristique dolor, vitae
                gravida nunc rutrum at. Integer ut sem quis ante laoreet
                volutpat eget mollis nisi. Sed purus tellus, ultrices
            </p>
            <a href="/shared-ownership" class="text-uppercase">Find out more</a>
        </div>
    </div>
</div>
{{-- Shared Ownership Feature --}}

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <img src="{{}}}" alt="">
        </div>
    </div>
</div>


</body>

</html>
