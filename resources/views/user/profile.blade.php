@extends('app')
@section('title') {!!$title!!} @parent @stop
@section('content')
@include('layouts.secondary_nav')
<section id="profile" class="bg-light-gray">
    <div class="container">
        {!! Form::open(array('route' => 'user_profile.store', 'novalidate' => 'novalidate', 'files' => true)) !!}
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-info" >
                  <div class="panel-heading">
                        <div class="panel-title">
                              Personal Information
                        </div>
                  </div>
                  <div style="padding-top:30px" class="panel-body form-horizontal" >
                      @include('partials.pinfo_form')
                  </div>


            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-info" >
                  <div class="panel-heading">
                        <div class="panel-title">
                            Technical Skills
                        </div>
                  </div>
                  <div style="padding-top:30px" class="panel-body form-horizontal" >
                      <label for="fname" class="control-label col-sm-3">Languages:</label>
                      <div class="col-sm-9 ">
                      @include('partials.lang_form')
                      </div>
                      <label for="fname" class="control-label col-sm-3">Operating Systems:</label>
                      <div class="col-sm-9 ">
                      @include('partials.os_form')
                      </div>
                      <label for="fname" class="control-label col-sm-3">Frameworks:</label>
                      <div class="col-sm-9 ">
                      @include('partials.fwork_form')
                      </div>
                  </div>


            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-info" >
                  <div class="panel-heading">
                        <div class="panel-title">
                              Educational Attainment
                        </div>
                  </div>
                  <div style="padding-top:30px" class="panel-body form-horizontal" >
                      @include('partials.educ_form')
                  </div>


            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-info" >
                  <div class="panel-heading">
                        <div class="panel-title">
                              Professional Experience
                        </div>
                  </div>
                  <div style="padding-top:30px" class="panel-body form-horizontal" >
                      @include('partials.comp_form')
                  </div>


            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-info" >
                  <div class="panel-heading">
                        <div class="panel-title">
                              Professional Reference
                        </div>
                  </div>
                  <div style="padding-top:30px" class="panel-body form-horizontal" >
                      @include('partials.ref_form')
                  </div>


            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2" >
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 pull-right">
                  {!!Form::submit('Submit', array('id' => 'submit', 'class' => 'btn btn-primary btn-block'))!!}
            </div>
        </div>


        {!!Form::close()!!}
    </div>
</section>
@endsection
