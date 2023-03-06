@extends('layouts.base')
@section('content')
<div class="home__container container-fluid">
    <video autoplay loop muted plays-inline class="climate-video">
        <source src="{{ url('images/climate-change.m4v') }}" type="video/mp4">
    </video>
    <div class="effect__container container-fluid">
        <h1>Understanding our planet to benefit humankind</h1>
        <div class="row effect__elements">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Carbon Dioxide</h4>
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                        <span class="total__number">419</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Ocean Warming</h4>
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                        <span class="total__number">345</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Carbon Dioxide</h4>
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                        <span class="total__number">419</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
