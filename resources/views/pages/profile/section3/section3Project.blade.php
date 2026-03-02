<h1 class="mt-5 mb-3 medium-text fw-bold">Projects</h1>
<div class="row">
    <div class="col">
        @foreach ( $projectTable as $pt )
            @if ($pt->github)
                <a class="btn mt-lg-1 mt-3 d-block" href={{ $pt->github }} target="_blank">
                    <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/GithubLogo.png') }}" alt="github button">
                </a>                
            @endif
        @endforeach
    </div>
</div>