<h1 class="mt-5 mb-3 large-text-lg fw-bold">{{ $randomdataTable['section3-3']->content }}</h1>
<div class="row">
    <div class="col">
        @foreach ( $experienceTable as $et )
            @if ($et->role) 
                <h4 class="mt-3 medium-text-lg medium-text">{{ $et->role }} {{ $et->duration }}</h4>    
            @endif
        @endforeach
    </div>
</div>