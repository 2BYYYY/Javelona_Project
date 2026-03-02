<h1 class="mt-5 mb-3 medium-text fw-bold">Skills</h1>
<div class="row text-center">
    <div class="col-lg-6 col-12 mt-1">
        <h4 class="medium-text text-start text-lg-center">{{ $skillTable['Python']->skill ?? 'No Data' }}</h4>
        <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/PythonLogo.png') }}" alt="logo of the python language"/>
    </div>
    <div class="col-lg-6 col-12 mt-lg-1 mt-5">
        <h4 class="medium-text text-start text-lg-center">{{ $skillTable['Javascript']->skill ?? 'No Data' }}</h4>
        <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/JSLogo.png') }}" alt="logo of the javascript language"/>
    </div>
    <div class="col-lg-6 col-12 mt-lg-2 mt-5">
        <h4 class="medium-text text-start text-lg-center">{{ $skillTable['React']->skill ?? 'No Data' }}</h4>
        <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/ReactLogo.png') }}" alt="logo of the react framework"/>
    </div>
    <div class="col-lg-6 col-12 mt-lg-2 mt-5">
        <h4 class="medium-text text-start text-lg-center">{{ $skillTable['Laravel']->skill ?? 'No Data' }}</h4>
        <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/LaravelLogo.jpg') }}" alt="logo of the laravel framework"/>
    </div>
    <div class="col-12 mt-lg-2 mt-5">
        <h4 class="medium-text text-start text-lg-center">{{ $skillTable['Postgresql']->skill ?? 'No Data' }}</h4>
        <img class="responsive-img-contain profile-section3-img" src="{{ asset('images/PostgreLogo.png') }}" alt="logo of the postgresql database"/>
    </div>
</div>