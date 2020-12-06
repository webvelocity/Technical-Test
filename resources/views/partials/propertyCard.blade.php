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
                            {{ ucfirst($property->address).', '.ucfirst($property->suburb).', '.ucfirst($property->city)  }}
                            <br>
                            {{($property->postalcode)}}
                        </p>
                        <span>Min share: {{($property->share_percentage)*100}}% (full price £{{ number_format($property->price, 0)}})</span><br>
                        <span>Share Price: £{{ number_format( $property->share_percentage*$property->price , 0) }}</span><br>
                        <span>Min Deposit: £{{ number_format($property->min_deposit, 0) }}</span>
                    </div>


                    <div class="amenities">
                        <div class="col-md-4">
                            <img src="" alt="" class="d-block">
                            <span>{{$property->amenity}}</span>
                        </div>
                    </div>

                    <div class="cta px-3 py-3">
                        <div class="row">
                            <div class="col-3">
                                <a href="{{$property->slug}}" class="px-3 btn btn-orange">Available</a>
                            </div>
                            <div class="col-3">
                                <a href="{{$property->slug}}" class="px-3 btn-outline-light btn">Share</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- ./Property Card --}}

    </div>
</div>
