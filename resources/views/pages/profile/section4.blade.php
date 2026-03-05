<div class="row mt-5 text-center">
    <h1 class="large-text-lg fw-bold">{{ $randomdataTable['section4-1']->content }}</h1>
    <div class="col mt-3 mb-5 d-flex text-align-center justify-content-center gap-3">
        @foreach ( $contactTable as $ct )
            <a href="{{ $ct->platform === 'linkdin' ? route('linkedinClicked') : $ct->link }}" target="_blank">
                <img class="rounded-circle responsive-img-contain profile-section4-img" src="{{ asset('images/'.$ct->platform.'.png') }}" alt="{{ $ct->platform }}">
            </a>
        @endforeach
    </div>
</div>