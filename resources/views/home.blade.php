@extends('layout.shell')
@section('content')

<div class="container-fluid">
    @include('components.slider')
    @include('components.destinations')
    @include('components.about')
</div>

@endsection