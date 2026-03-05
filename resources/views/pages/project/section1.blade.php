<div class="row gy-3">
    @foreach ( $projectTable as $pt )
        <div class="col-12">
            <div class="row">
                <div class="col-lg-6 col-12">
                    {{-- check the project controller for the slug column --}}
                    <img class="border border-success border-4 responsive-img-cover project-section1-img" src="{{ asset('images/'.$pt->slug.'.png') }}" alt="{{ $pt->project_name }}"/>
                </div>
                <div class="col-lg-6 col-12 mt-lg-0 mt-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ $pt->github }}" target="_blank">
                            <img class="project-section1-img-github" src="{{ asset('images/'.$randomdataTable->content.'.png') }}" alt="{{ $randomdataTable->content }}"/>
                        </a>
                        <h4 class="small-text-lg small-text fw-bold">{{ $pt->difficulty }}</h4>
                    </div>  
                    <h1 class="large-text-lg large-text fw-bold mt-3">{{ $pt->project_name }}</h1>
                    <h4 class="medium-text-lg medium-text fst-italic mt-3">{{ $pt->tools }}</h4>
                    <h4 class="small-text-lg small-text">{{ $pt->description }}</h4>
                </div>
            </div>
        </div>
    @endforeach

</div>