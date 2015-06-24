
  <div id='educ'>
        <div class='form-group @if($errors->has('school')) has-error @endif' >
              <label for='fname' class='control-label col-sm-3'>School:</label>
              <div class='col-sm-9 '>
              {!!Form::text('school', Input::old('school'), array('id' => 'school', 'class' => 'form-control'))!!}
              </div>
              <div id="school_err" class='col-sm-12 text-center'>
                    @if ($errors->has('school'))
                    <p class="help-block">{{ $errors->first('school') }}</p>
                    @endif
              </div>
        </div>
        <div class='form-group @if($errors->has('year2') || $errors->has('year1')) has-error @endif' id='date'>
              <label for='fname'  class='control-label col-sm-3'>Dates Attended:<br/>
              </label>
              <div class='col-sm-9'>
                    <div class='col-sm-5 pad' >
                        <?php $yeard2 = date('Y'); ?>
                        @for ($j = 0; $j <= 80; $j++)
                        <?php
                        $a['']= '-';
                        $a[$yeard2]= $yeard2;

                        // echo "<option value='".$yeard2."'>".$yeard2."</option>";
                        $yeard2--;
                        ?>
                        @endfor
                        {!!Form::select('year1', $a, Input::old('year1'),array('id' => 'year1', 'class' => 'form-control'))!!}
                    </div>
                    <div class='col-sm-2 pad text-center'>-</div>
                    <div class='col-sm-5 pad' >
                          <?php $yeard2 = date('Y'); ?>
                          @for ($j = 0; $j <= 80; $j++)
                          <?php
                          $a['']= '-';
                          $a[$yeard2]= $yeard2;

                          // echo "<option value='".$yeard2."'>".$yeard2."</option>";
                          $yeard2--;
                          ?>
                          @endfor
                          {!!Form::select('year2', $a, Input::old('year2'),array('id' => 'year2', 'class' => 'form-control'))!!}
                    </div>
              </div>
              <div id="year_err" class='col-sm-12 text-center'>
                    @if ($errors->has('year1'))
                    <p class="help-block">{{ $errors->first('year1') }}</p>
                    @else
                    <p class="help-block">{{ $errors->first('year2') }}</p>
                    @endif
              </div>
        </div>
        <div class='form-group'>
              <label for='fname' class='control-label col-sm-3'>Feild of Study:</label>
              <div class='col-sm-9'>
                    {!!Form::text('major', Input::old('major'), array('id' => 'major', 'class' => 'form-control'))!!}
              </div>
        </div>
        <div class='form-group @if ($errors->has('degree'))
        has-error
        @endif'>
              <label for='degree' class='control-label col-sm-3'>Degree:</label>
              <div class='col-sm-9'>
                    {!!Form::select('degree', array(''=>'-','High School'=>'High School', 'Associate\'s Degree'=>'Associate\'s Degree',
                    'Bachelor\'s Degree'=>'Bachelor\'s Degree', 'Master\'s Degree'=>'Masters\'s Degree'), Input::old('degree'), array('id' => 'degree', 'class' => 'form-control'))!!}
              </div>
              <div id="degree_err" class='col-sm-12 text-center'>
                    @if ($errors->has('degree'))
                    <p class="help-block">{{ $errors->first('degree') }}</p>
                    @endif
              </div>
        </div>
        <div class='form-group'>
              <label for='desc' class='control-label col-sm-3'>Description:</label>
              <div class='col-sm-9'>
                    {!!Form::textarea('desc', Input::old('desc'), array('id' => 'desc', 'class' => 'form-control', 'rows'=>'3'))!!}
              </div>
        </div>
  </div>
