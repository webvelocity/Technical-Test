<div class="container">
    <div class="row">
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
                    <img src="{{ asset('img/properties/'.$property->image) }}" alt="{{$property->title}}"
                         class="w-100 property-card__img">
                    <div class="p-3">
                        <h4 class="property-card__title">{{$property->title}}</h4>
                        <p>
                            {{ ucfirst($property->address), ucfirst($property->suburb), ucfirst($property->city)  }}
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

    </div>
</div>
