<div class="row g-3">
    @foreach( $experienceTable as $et )
        <div class="col-lg-4 col-12 mb-3">
            <img class="border border-success border-4 responsive-img-cover experience-section1-img" src="{{ asset('images/'. $et->slug .'.jpg') }}" alt="{{ $et->role }} role picture"/>
            <div class="row">
                <div class="col-12">
                    <h1 class="medium-text-lg large-text">{{ $et->role }}</h1>
                </div>
                <div class="col-12">
                    <h4 class="small-text-lg small-text fw-bold">{{ $et->duration }}</h4>
                </div>
            </div>
            <h4 class="small-text-lg small-text fst-italic">{{ $et->description }}</h4>
        </div>
    @endforeach
</div>