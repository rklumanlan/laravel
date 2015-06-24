
  <div id='pr'>
        <div class='form-group @if ($errors->has('refname')) has-error @endif'>
              <label for='fname' class='control-label col-sm-3'>Name:</label>
              <div class='col-sm-9'>
                    {!!Form::text('refname', Input::old('refname'), array('id' => 'refname', 'class' => 'form-control'))!!}
              </div>
              <div id="school_err" class='col-sm-12 text-center'>
                    @if ($errors->has('refname'))
                    <p class="help-block">{{ $errors->first('refname') }}</p>
                    @endif
              </div>
        </div>
        <div class='form-group @if($errors->has('cnum')) has-error @endif'>
              <label for='cnum' class='control-label col-sm-3  '>Contact Number:</label>
              <div class='col-sm-9'>
                    {!!Form::text('cnum', Input::old('cnum'), array('id' => 'cnum', 'class' => 'form-control','maxlength'=>'11'))!!}
              </div>
              <div id="cnum_err" class='col-sm-12 text-center'>
                    @if ($errors->has('cnum'))
                    <p class="help-block">{{ $errors->first('cnum') }}</p>
                    @endif
              </div>
        </div>

        <div class='form-group @if($errors->has('email')) has-error @endif'>
              <label for='email' class='control-label col-sm-3  '>Email Address:</label>
              <div class='col-sm-9'>
                    {!!Form::email('email', Input::old('email'), array('id' => 'email', 'class' => 'form-control'))!!}
              </div>
              <div id="cemail_err" class='col-sm-12 text-center'>
                    @if ($errors->has('email'))
                    <p class="help-block">{{ $errors->first('email') }}</p>
                    @endif
              </div>
        </div>
  </div>
