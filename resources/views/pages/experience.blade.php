@extends('app')

@section('content')
    <div class="container-fluid px-custom">
        <a href="{{ route('experience.create') }}"></a>
        @include('pages.experience.section1')
    </div>
@endsection