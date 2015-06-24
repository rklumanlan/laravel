@extends('app')
@section('title') Home @parent @stop
@section('content')
<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url({{ asset('/images/slider/slide_01.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- <div class="carousel-content centered">

                                <img src="{{ asset('/images/slider/keyvisual_txt.png') }}" alt="NTecB" class="animation animated-item-1 img-responsive img-centered" >
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Apply Now</a>
                            </div> -->
                            <div class="carousel-content center centered">
                                <img src="{{ asset('/images/slider/keyvisual_txt.png') }}" alt="NTecB" class="animation animated-item-1 img-responsive img-centered" >
                                <br>
                                {!! Html::link('auth/register', 'Apply Now', array('class' => 'btn btn-md animation animated-item-2'))!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ asset('/images/slider/slide_02.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                              <img src="{{ asset('/images/slider/keyvisual_txt.png') }}" alt="NTecB" class="animation animated-item-1 img-responsive img-centered" >
                              <br>
                              {!! Html::link('auth/register', 'Apply Now', array('class' => 'btn btn-md animation animated-item-2'))!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url({{ asset('/images/slider/slide_03.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                              <img src="{{ asset('/images/slider/keyvisual_txt.png') }}" alt="NTecB" class="animation animated-item-1 img-responsive img-centered" >
                              <br>
                              {!! Html::link('auth/register', 'Apply Now', array('class' => 'btn btn-md animation animated-item-2'))!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url({{ asset('/images/slider/slide_04.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                              <img src="{{ asset('/images/slider/keyvisual_txt.png') }}" alt="NTecB" class="animation animated-item-1 img-responsive img-centered" >
                              <br>
                              {!! Html::link('auth/register', 'Apply Now', array('class' => 'btn btn-md animation animated-item-2'))!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->
@include('pages.works')
@endsection
