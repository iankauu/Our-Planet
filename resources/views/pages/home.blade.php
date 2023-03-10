@extends('layouts.base')
@section('content')
<div class="home__container container-fluid">
    <div class="slider__container">
        <video src="{{ url('images/climate-change.m4v') }}" autoplay loop muted></video>
        <div class="effect__container">
            <h1>Understanding our planet to benefit humankind</h1>
            <div class="effect__elements">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" data-toggle="modal" data-target="#climateElements">
                            <div class="border__lineTop">
                                <span class="border__lineBottom"></span>
                            </div>
                            <div class="card-body">
                                <h4 id="effect_element1">carbon dioxide</h4>
                                <div class="card__elements">
                                    <div class="card__stats">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="total__number">419</span>
                                    </div>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="border__lineTop">
                                <span class="border__lineBottom"></span>
                            </div>
                            <div class="card-body">
                                <h4 id="effect_element1">carbon dioxide</h4>
                                <div class="card__elements">
                                    <div class="card__stats">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="total__number">419</span>
                                    </div>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="border__lineTop">
                                <span class="border__lineBottom"></span>
                            </div>
                            <div class="card-body">
                                <h4 id="effect_element1">carbon dioxide</h4>
                                <div class="card__elements">
                                    <div class="card__stats">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="total__number">419</span>
                                    </div>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="border__lineTop">
                                <span class="border__lineBottom"></span>
                            </div>
                            <div class="card-body">
                                <h4 id="effect_element1">carbon dioxide</h4>
                                <div class="card__elements">
                                    <div class="card__stats">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="total__number">419</span>
                                    </div>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="border__lineTop">
                                <span class="border__lineBottom"></span>
                            </div>
                            <div class="card-body">
                                <h4 id="effect_element1">carbon dioxide</h4>
                                <div class="card__elements">
                                    <div class="card__stats">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="total__number">419</span>
                                    </div>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="border__lineTop">
                                <span class="border__lineBottom"></span>
                            </div>
                            <div class="card-body">
                                <h4 id="effect_element1">carbon dioxide</h4>
                                <div class="card__elements">
                                    <div class="card__stats">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="total__number">419</span>
                                    </div>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
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
            <div class="news__collection">
                <div class="row">
                    <div class="col-md-4">
                        <a href="">
                            <div class="card">
                                <img src="{{ url('images/climate.png') }}" class="card-img-top"
                                    alt="news__image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of
                                        the
                                        card's
                                        content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="card">
                                <img src="{{ url('images/climate.png') }}" class="card-img-top"
                                    alt="news__image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of
                                        the
                                        card's
                                        content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <div class="card">
                                <img src="{{ url('images/climate.png') }}" class="card-img-top"
                                    alt="news__image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of
                                        the
                                        card's
                                        content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="climate__container">
        <div class="header">
            <h1>What Is Climate Change?</h1>
        </div>
        <div class="climate__elements">
            <div class="climate__cards">
                <div class="climate__singleCard">
                    <a href="">
                        <div class="card">
                            <div class="card__info">
                                <h2>evidence</h2>
                                <p>how do we know <br> climate change is real?<p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="climate__singleCard">
                    <a href="">
                        <div class="card">
                            <h2>evidence</h2>
                            <p>how do we know <br> climate change is real?<p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="climateElements" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="climateElements" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h1>Carbon Dioxide<h1>
                    </div>
                    <div class="col">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="element__info">
                        <div class="graph__section">
                            <h1>test 1</h1>
                        </div>
                        <div class="map__section">
                            <h1>test 1</h1>
                        </div>
                    </div>
                </div>
                <div class="modal-footer "></div>
            </div>
        </div>
    </div>
</div>
@endsection
