<h1 class="mt-5 mb-3 medium-text fw-bold">Experience</h1>
<div class="row">
    <div class="col">
        @foreach ( $experienceTable as $et )
            @if ($et->role) 
                <h4 class="mt-3">{{ $et->role }} {{ $et->duration }}</h4>    
            @endif
        @endforeach
    </div>
</div>