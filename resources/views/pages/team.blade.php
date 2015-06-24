@extends('app')
@section('title') Team @parent @stop
@section('content')
@include('layouts.secondary_nav')
<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img width="50%" src="{{ asset('/images/team/jories.jpg') }}" class="img-responsive img-circle" alt="">
                    <h4>Jo-Ries P. Canino</h4>
                    <p class="text-muted">Programmer</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img width="50%" src="{{ asset('/images/team/jk.jpg') }}" class="img-responsive img-circle" alt="">
                    <h4>John Kenneth Magtoto</h4>
                    <p class="text-muted">Programmer</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img width="50%" src="{{ asset('/images/team/kevin.jpg') }}" class="img-responsive img-circle" alt="">
                    <h4>Roman Kevin M. Lumanlan</h4>
                    <p class="text-muted">Programmer</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
