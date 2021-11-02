@extends('layouts.site')

@section('title', 'Homepage')

@section('content')

{{-- banner --}}
@include('front.home.banner')

{{-- top-nav --}}
<div class="row shadow-sm bg-white py-4" style="position: relative; top:90px;min-height:10000px">
    <div class="container-fluid col-lg-10 col-sm-12 mx-auto">
        @include('front.layout.navs.top')
    </div>
</div>
@endsection
