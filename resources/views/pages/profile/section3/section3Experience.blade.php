<h1 class="mb-3 fs-1 fw-bold">Experience</h1>
<div class="row">
    <div class="col">
        @foreach ( $experienceTable as $et )
            @if ($et->role) 
                <h4 class="mt-4">{{ $et->role }} {{ $et->duration }}</h4>    
            @endif
        @endforeach
    </div>
</div>