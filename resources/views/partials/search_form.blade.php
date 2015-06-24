<div style="padding-top:30px" class="panel-body form-horizontal" >
      <div class='com' id='com'>
            <div class='form-group'>
                  <label for='fname' class='control-label col-sm-1'>Name:</label>
                  <div class='col-sm-3'>
                        {!!Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control'))!!}
                  </div>
                  <label for='fname' class='control-label col-sm-1'>Sex:</label>
                  <div class='col-sm-3'>
                      {!!Form::select('sex', array('' => '-', 'Male' => 'Male', 'Female' => 'Female'), '', array('id' => 'sex', 'class' => 'form-control'))!!}
                  </div>
                  <label for='fname' class='control-label col-sm-1'>Age:</label>
                  <div class='col-sm-3'>
                      {!!Form::select('age', array('' => '-', 'Newly Graduate' =>'Newly Graduate','22-25' => '22-25', '26-30' => '26-30'), '', array('id' => 'age', 'class' => 'form-control'))!!}
                  </div>
            </div>
            <div class='form-group'>
                <label for='fname' class='control-label col-sm-3'>Languages:</label>
                <div class='col-sm-9'>
                    @include('partials.lang_form')
                </div>

            </div>
            <div class='form-group'>
                <label for='fname' class='control-label col-sm-3'>Operating System:</label>
                <div class='col-sm-9'>
                    @include('partials.os_form')
                </div>

            </div>
            <div class='form-group'>
                <label for='fname' class='control-label col-sm-3'>Framework:</label>
                <div class='col-sm-9'>
                    @include('partials.fwork_form')
                </div>

            </div>
            <div class='form-group'>
                  <div class='col-sm-3 pull-right'>
                      {!!Form::submit('Search', array('id' => 'save', 'class' => 'btn btn-primary btn-block')) !!}
                  </div>
            </div>
      </div>
</div>
