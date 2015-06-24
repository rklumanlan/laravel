@extends('app')
@section('title') {!!$title!!} @parent @stop
@section('content')
@include('layouts.secondary_nav')
<section id="profile" class="bg-light-gray">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
        @foreach($users as $user)
            @include('applicant_layout.pinfo')
            @include('applicant_layout.tskills')
            @include('applicant_layout.educ')
            @include('applicant_layout.comp')
            @include('applicant_layout.ref')
        @endforeach
        </div>
    </div>
</section>
@endsection
