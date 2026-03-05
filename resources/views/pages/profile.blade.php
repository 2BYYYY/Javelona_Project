@extends('app')

@section('content')
@if (!session('linkedin_clicked'))
    <script>
        alert("You need to check out my LinkedIn first! (every 1 min)");
    </script>
@endif
<div class="container-fluid px-custom">
    @include('pages.profile.section1')
    @include('pages.profile.section2')
    @include('pages.profile.section3')
    @include('pages.profile.section4')
</div>
@endsection

