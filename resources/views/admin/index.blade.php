@extends('app')
@section('title') {!!$title!!} @parent @stop
@section('content')
@include('layouts.secondary_nav')
<section id="profile" class="bg-light-gray">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2" style=" padding:30px 20px">
            <div class="row" id="search_view" style="background-color: #eff0f2;padding-top:30px; padding-bottom:30px; margin-bottom:10px">
                <div class="col-lg-12">
                    {!!
                    Form::open(['method'=>'GET','route'=>['admin_dashboard.search']]) !!}
                    @include('partials.search_form')
                    {!!Form::close()!!}
                </div>
            </div>
            <div class="row invi" id="refine_view" style="background-color: #eff0f2;padding-top:30px; padding-bottom:30px; margin-bottom:10px">
                <div class="col-lg-12">
                    <a style="cursor:pointer" onclick="refine()">Click here</a> to refine searches.
                </div>
            </div>
            @if($users!=NULL)

            <div class="row" id="result_view" style="background-color: #eff0f2;padding-top:30px; padding-bottom:30px; margin-bottom:10px">
                <div class="col-lg-12">
                    @include('partials.results')
                </div>
            </div>
            @endif

        </div>

    </div>
</section>
@endsection
