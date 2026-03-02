<h1 class="fs-1 fw-bold">Projects</h1>
<div class="row">
    <div class="col">
        @foreach ( $projectTable as $pt )
            @if ($pt->github)
                <a class="btn mt-4 d-block" href={{ $pt->github }} target="_blank">
                    <img class="img-fluid" src="{{ asset('images/GithubLogo.png') }}" alt="github button">
                </a>                
            @endif
        @endforeach
    </div>
</div>