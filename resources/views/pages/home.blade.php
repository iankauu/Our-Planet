@extends('layouts.base')
@section('content')
<div class="home__container container-fluid">
    <video autoplay loop muted plays-inline class="climate-video">
        <source src="{{url('images/climate-change.m4v')}}" type="video/mp4">
    </video>
</div>
@endsection
