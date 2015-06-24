
  <div class='com' id='com'>
        <div class='form-group'>
              <label for='fname' class='control-label col-sm-3'>Company Name:</label>
              <div class='col-sm-9'>
                    {!!Form::text('compname', Input::old('compname'), array('id' => 'compname', 'class' => 'form-control'))!!}
              </div>
        </div>
        <div class='form-group'>
              <label for='fname' class='control-label col-sm-3'>Title:</label>
              <div class='col-sm-9'>
                    {!!Form::text('title', Input::old('title'), array('id' => 'title', 'class' => 'form-control'))!!}
              </div>
        </div>
        <div class='form-group'>
              <label for='fname' class='control-label col-sm-3'>Location:</label>
              <div class='col-sm-9'>
                    {!!Form::text('location', Input::old('location'), array('id' => 'mjr', 'class' => 'form-control'))!!}
              </div>
        </div>
        <div class='form-group '>
              <label for='fname' class='control-label col-sm-3'>Time Period:</label>
              <div class='col-sm-9 @if($errors->has('cyear2')) has-error @endif '>
                    <div class='col-sm-3 pad' >
                          {!!Form::select('mon1', array(''=>'Choose...','1'=>'January','2'=>'Febrauary',
                              '3'=> 'March', '4'=>'April', '5'=>'May', '6'=> 'June', '7'=>'July',
                              '8'=> 'August', '9'=>'September', '10'=>'October',
                              '11'=>'November', '12'=>'December'), Input::old('mon1'), array('id' => 'mon1', 'class' => 'form-control'))!!}
                    </div>
                    <div class='col-sm-2 pad'>
                        <?php $yeard2 = date('Y'); ?>
                        @for ($j = 0; $j <= 80; $j++)
                        <?php
                        $a['']= '-';
                        $a[$yeard2]= $yeard2;

                        // echo "<option value='".$yeard2."'>".$yeard2."</option>";
                        $yeard2--;
                        ?>
                        @endfor
                        {!!Form::select('cyear1', $a, Input::old('cyear'),array('id' => 'year1', 'class' => 'form-control'))!!}
                    </div>
                    <div class='col-sm-2 text-center'> - </div>
                    <div class='col-sm-3 pad' id='mTo".$ctr."'>
                          {!!Form::select('mon2', array(''=>'Choose...','13'=>'Present','1'=>'January','2'=>'Febrauary',
                              '3'=> 'March', '4'=>'April', '5'=>'May', '6'=> 'June', '7'=>'July',
                              '8'=> 'August', '9'=>'September', '10'=>'October',
                              '11'=>'November', '12'=>'December'), Input::old('mon2'), array('id' => 'mon2', 'class' => 'form-control'))!!}
                    </div>
                    <div class='col-sm-2 pad' id='yTo".$ctr."'>
                        <?php $yeard2 = date('Y'); ?>
                        @for ($j = 0; $j <= 80; $j++)
                        <?php
                        $a['']= '-';
                        $a[$yeard2]= $yeard2;

                        // echo "<option value='".$yeard2."'>".$yeard2."</option>";
                        $yeard2--;
                        ?>
                        @endfor
                        {!!Form::select('cyear2', $a, Input::old('cyear2'),array('id' => 'year2', 'class' => 'form-control'))!!}
                    </div>
                    <div id="year_err" class='col-sm-12 text-center'>
                          @if ($errors->has('cyear2'))
                          <p class="help-block">{{ $errors->first('cyear2') }}</p>
                          @endif
                    </div>
              </div>
        </div>
        <div class='form-group'>
              <label for='compdesc' class='control-label col-sm-3'>Description:</label>
              <div class='col-sm-9'>
                    {!!Form::textarea('compdesc', Input::old('compdesc'), array('id' => 'compdesc', 'class' => 'form-control', 'rows'=>'3'))!!}
              </div>
        </div>
  </div>
