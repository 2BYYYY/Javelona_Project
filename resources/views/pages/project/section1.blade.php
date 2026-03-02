<div id="project-section1" class="row">
    @foreach ( $projectTable as $pt )
        <div class="col-lg-4">
            {{-- check the project controller for the slug column --}}
            <img class="border border-success responsive-img-cover" src="{{ asset('images/'.$pt->slug.'.png') }}" alt="{{ $pt->project_name }} picture"/>
            <h1 class="fw-bold">{{ $pt->project_name }}</h1>
            <h4>{{ $pt->difficulty }}</h4>
            <h4>{{ $pt->description }}</h4>
            <a href="{{ $pt->github }}" target="_blank">
                <img id="project-section1-github" class="responsive-img-contain" src="{{ asset("images/GithubLogo.png") }}" alt="github button"/>
            </a>
        </div>
    @endforeach
</div>