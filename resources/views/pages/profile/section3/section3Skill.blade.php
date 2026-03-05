<h1 class="mt-5 mb-3 large-text-lg large-text fw-bold">{{ $randomdataTable['section3-1']->content }}</h1>
<div class="row text-center">
    @foreach( $skillTable as $st)
        {{-- caution this is based on the order of data, first one returned is the bottom one with col-12 --}}
        @if ($st->skill != "Javascript")
            <div class="col-lg-6 col-12 mt-1">
                <h4 class="small-text-lg medium-text text-start text-lg-center">{{ $st->skill ?? 'No Data' }}</h4>
                <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/'. $st->skill .'.png') }}" alt="logo of the {{ $st->skill }}"/>
            </div>
        @else
            <div class="col-12 mt-1">
                <h4 class="small-text-lg medium-text text-start text-lg-center">{{ $st->skill ?? 'No Data' }}</h4>
                <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/'. $st->skill .'.png') }}" alt="logo of the {{ $st->skill }}"/>
            </div>      
        @endif
    @endforeach
</div>