@extends('layouts.base')
@section('content')
<div class="slider__container">
    <video src="{{ url('images/climate-change.m4v') }}" autoplay loop muted></video>
    <div class="effect__container">
        <h1>Understanding our planet to benefit humankind</h1>
        <div class="effect__elements">
            <div class="card">
                <div class="card-body">
                    <h4 id="effect_element3">cardbon Dioxide</h4>
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span class="total__number">419</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 id="effect_element3">cardbon Dioxide</h4>
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span class="total__number">419</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 id="effect_element3">cardbon Dioxide</h4>
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span class="total__number">419</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 id="effect_element3">cardbon Dioxide</h4>
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span class="total__number">419</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 id="effect_element3">cardbon Dioxide</h4>
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span class="total__number">419</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 id="effect_element3">cardbon Dioxide</h4>
                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    <span class="total__number">419</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="news__container">
    <div class="header">
        <h1>News Segment</h1>
        <a href="">See all</a>
    </div>
    <div class="news__cards">
        <a href="">
            <div class="card">
                <img src="{{ url('images/climate.png') }}" class="card-img-top" alt="news__image">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <img src="{{ url('images/climate.png') }}" class="card-img-top" alt="news__image">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card">
                <img src="{{ url('images/climate.png') }}" class="card-img-top" alt="news__image">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
