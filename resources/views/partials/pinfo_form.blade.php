
<div class="form-group @if ($errors->has('fname')) has-error @endif">
      <label for="fname" class="control-label col-sm-3  ">First Name:</label>
      <div class="col-sm-9">
            {!!Form::text('fname', Input::old('fname'), array('id' => 'fname', 'class' => 'form-control'))!!}
      </div>
      <div id="fname_err" class='col-sm-12 text-center'>
            @if ($errors->has('fname'))
            <p class="help-block">{{ $errors->first('fname') }}</p>

            @endif
      </div>
</div>
<div class="form-group">
      <label for="mname" class="control-label col-sm-3 ">Middle Name:</label>
      <div class="col-sm-9">
            {!!Form::text('mname', Input::old('mname'), array('id' => 'mname', 'class' => 'form-control'))!!}
      </div>
</div>
<div class="form-group @if ($errors->has('lname')) has-error @endif">
      <label for="lname" class="control-label col-sm-3">Last Name:</label>
      <div class="col-sm-9">
            {!!Form::text('lname', Input::old('lname'), array('id' => 'lname', 'class' => 'form-control'))!!}
      </div>
      <div id="lname_err" class='col-sm-12 text-center'>
            @if ($errors->has('lname'))
                  <p class="help-block">{{ $errors->first('lname') }}</p>
            @endif
      </div>
</div>
<div class="form-group @if ($errors->has('address')) has-error @endif">
      <label for="add" class="control-label col-sm-3">Address:</label>
      <div class="col-sm-9">
            {!!Form::text('address', Input::old('address'), array('id' => 'address', 'class' => 'form-control'))!!}
      </div>
      <div id="add_err" class='col-sm-12 text-center'>
            @if ($errors->has('address'))
                  <p class="help-block">{{ $errors->first('address') }}</p>
            @endif
      </div>
</div>
<div class="form-group @if($errors->has('city')) has-error @endif">
      <label for="prov_mun" class="control-label col-sm-3">Province/Muncipality:</label>
      <div class="col-sm-9 ">
            {!!Form::text('city', Input::old('city'), array('id' => 'city', 'class' => 'form-control'))!!}
      </div>
      <div id="prov_mun_err" class='col-sm-12 text-center'>
            @if ($errors->has('city'))
                  <p class="help-block">{{ $errors->first('city') }}</p>
            @endif
      </div>
</div>
<div class="form-group @if($errors->has('sex')) has-error @endif">
      <label for="sex" class="control-label col-sm-3">Sex:</label>
      <div class="col-sm-9 ">
            {!!Form::select('sex', array('' => '-', 'Male' => 'Male', 'Female' => 'Female'), Input::old('sex'), array('id' => 'sex', 'class' => 'form-control'))!!}
      </div>
      <div id="sex_err" class='col-sm-12 text-center'>
            @if ($errors->has('sex'))
                  <p class="help-block">{{ $errors->first('sex') }}</p>
            @endif
      </div>
</div>
<div class="form-group @if ($errors->has('age')) has-error @endif">
      <label for="age" class="control-label col-sm-3">Age:</label>
      <div class="col-sm-9 ">
            {!!Form::select('age', array('' => '-', 'Newly Graduate' => 'Newly Graduate', '22-25' => '22-25', '26-30' => '26-30'), Input::old('age'), array('id' => 'age', 'class' => 'form-control'))!!}
      </div>
      <div id="age_err" class='col-sm-12 text-center'>
            @if ($errors->has('age'))
                  <p class="help-block">{{ $errors->first('age') }}</p>
            @endif
      </div>
</div>
<div class="form-group @if ($errors->has('file')) has-error @endif">
      <label for="add" class="control-label col-sm-3">Image:</label>
      <div class="col-sm-9">
            {!!Form::file('file', array('id' => 'file', 'class' => 'form-control'))!!}
      </div>
      <div id="age_err" class='col-sm-12 text-center'>
            @if ($errors->has('file'))
                  <p class="help-block">{{ $errors->first('file') }}</p>
            @endif
      </div>
</div>
