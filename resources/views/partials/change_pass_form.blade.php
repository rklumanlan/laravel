<div class="form-group">
    <label class="col-md-4 control-label">Old Password</label>
    <div class="col-md-6 @if($errors->has('old_password')) has-error @endif">
        <input type="password" class="form-control" name="old_password">
        @if($errors->has('old_password'))
        <p class="help-block">{{ $errors->first('old_password')}}</p>
		@endif
    </div>
</div>

<div class="form-group ">
    <label class="col-md-4 control-label">New Password</label>
    <div class="col-md-6 @if($errors->has('password')) has-error @endif">
        <input type="password" class="form-control" name="password">
        @if($errors->has('password'))
        <p class="help-block">{{ $errors->first('password')}}</p>
		@endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Confirm Password</label>
    <div class="col-md-6 @if($errors->has('confirm_password')) has-error @endif">
        <input type="password" class="form-control" name="confirm_password">
        @if($errors->has('confirm_password'))
        <p class="help-block">{{ $errors->first('confirm_password')}}</p>
		@endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Change Password
        </button>
    </div>
</div>
