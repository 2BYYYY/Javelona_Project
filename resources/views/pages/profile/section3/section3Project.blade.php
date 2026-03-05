<h1 class="mt-5 mb-3 large-text-lg large-text fw-bold">{{ $randomdataTable['section3-2']->content }}</h1>
<div class="row">
    <div class="col">
        @foreach ( $projectTable as $pt )
            @if ($pt->github)
                <a class="btn mt-lg-1 mt-3 d-block border-0" href={{ $pt->github }} target="_blank">
                    <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/'.$randomdataTable['global']->content.'.png') }}" alt="{{ $randomdataTable['global']->content }}">
                </a>                
            @endif
        @endforeach
    </div>
</div>