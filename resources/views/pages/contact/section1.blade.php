<div class="row text-center">
    <div class="col-12 g-1">
        <img class="border border-success border-4 img-fluid contact-section1-img-pp" src="{{ asset('images/'. $randomdataTable['section1-img']->content .'.jpg') }}"/>
        <h1 class="mt-5">{{ $randomdataTable['section1-h1']->content }}</h1>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center gap-5 mt-2">
        @foreach ( $contactTable as $ct )
            @if ( $ct->platform != "gmail")
                <a href="{{ $ct->link }}" target="_blank">
                    <img class="rounded-circle responsive-img-contain contact-section1-img" src="{{ asset('images/'. $ct->platform .'.png') }}" alt="{{ $ct->platform }}"/>
                </a>          
            @else
                <a href="mailto:{{ $ct->link }}" target="_blank">
                    <img class="border border-4 rounded-circle responsive-img-contain contact-section1-img" src="{{ asset('images/'. $ct->platform .'.jpg') }}" alt="{{ $ct->platform }}"/>
                </a>
            @endif
        @endforeach
    </div>
        {{-- 
        <a href="mailto:{{ $contactTable->gmail }}" target="_blank">
            <img class="project-section1-img-github" src="{{ asset('images/gmail.png') }}" alt="github button"/>
        </a>
        <a href="{{ $contactTable->linkedin }}" target="_blank">
            <img class="project-section1-img-github" src="{{ asset('images/Logo.png') }}" alt="github button"/>
        </a> --}}
</div>
