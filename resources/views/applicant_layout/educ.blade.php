<div>
    <div class="row resume-container" id="educ_view">
        <div class="col-lg-12">
              <div class='col-lg-12 form_title space bg'>
                  Educational Attainment
             </div>
             @if(Request::is('user_profile/education/create'))
             <div class="col-lg-12" id="addform">
                 {!!
                 Form::open(['method'=>'POST','route'=>['user_profile.education.store']]) !!}
                 @include('partials.educ_form')

                 <div class="col-lg-12">
                     <div class="col-lg-2 pull-right ">
                         {!!Form::button('Cancel', array('id' => 'cancel_add_educ', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                     </div>
                     <div class="col-lg-2 pull-right ">
                         {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'add_educ')) !!}
                     </div>

                 </div>
                 {!!Form::close()!!}
             </div>
             @endif
             @if($user->educ != NULL)

                @foreach($user->educ as $educ)
                <div class="col-lg-12">
                     <div class="col-lg-12" id="educ_data">
                         <div class="col-sm-12" @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_educ" @endif>
                            @if(Auth::user()->admin==0)
                            <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.education.edit', $educ['educ_id']) !!}@endif">
                            <span @if(Auth::user()->admin==0) class="pointer" id="educ"  @endif>
                                    <span >
                                {!!$educ['school']!!}</span>
                                <span class="icon-edit invi edit_educ "></span>
                            </span>
                            </a>
                            @else
                            <span >{!!$educ['school']!!}</span>

                            @endif
                         </div>
                         <div class="col-sm-12" @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_educ" @endif>
                             @if(Auth::user()->admin==0)
                             <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.education.edit', $educ['educ_id']) !!}@endif">
                             <span @if(Auth::user()->admin==0) class="pointer" id="educ" onClick='open_container(this.id)' @endif>
                                 <span >
                                {!!$educ['year1']!!} - {!!$educ['year2']!!}</span>
                                <span class="icon-edit invi edit_educ "></span>
                            </span>
                            </a>


                            @else

                            <span >{!!$educ['year1']!!} - {!!$educ['year2']!!}</span>


                            @endif
                         </div>
                         <div class="col-sm-12"  @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_educ" @endif>
                             @if(Auth::user()->admin==0)
                             <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.education.edit', $educ['educ_id']) !!}@endif">
                             <span @if(Auth::user()->admin==0) class="pointer" id="educ" onClick='open_container(this.id)' @endif>
                                <span >
                                {!!$educ['degree']!!}
                                @if($educ['degree'] != NULL && $educ['major'] !=NULL), @endif {!!$educ['major']!!}</span>
                                <span class="icon-edit invi edit_educ "></span>
                             </span>
                             </a>
                             @else
                                <span >
                                {!!$educ['degree']!!}
                                @if($educ['degree'] != NULL && $educ['major'] !=NULL), @endif {!!$educ['major']!!}
                                </span>


                             @endif
                         </div>
                         @if($educ['desc'] !=NULL)
                         <div class="col-sm-12"  @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_educ" @endif>
                             @if(Auth::user()->admin==0)
                             <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.education.edit', $educ['educ_id']) !!}@endif">
                                    <span @if(Auth::user()->admin==0) class="pointer" id="educ" onClick='open_container(this.id)' @endif>
                                         <span >
                                    <span >{!!$educ['desc']!!}</span>
                                  <span class="icon-edit invi edit_educ "></span>
                               </span>
                               </a>
                               @else
                                <span >{!!$educ['desc']!!}</span>
                               @endif
                         </div>
                         @endif
                     </div>
                 </div>
                 @endforeach

            @endif
        </div>
    </div>
    @if(Auth::user()->admin==0)
    <div class="row" style="margin-bottom:10px"><a href="{!! URL::route('user_profile.education.create') !!}"><button type="button" class="btn btn-primary btn-block">Add Education</button></a>
    </div>

        @if($educ2 != NULL)
        <div class="panel panel-info" id="editform" >
            <div class="panel-heading">
                <div class="panel-title">
                      Educational Attainment
                </div>
            </div>
            <div style="padding-top:30px" class="panel-body form-horizontal" >
                {!!
                Form::model($educ2,['method'=>'PATCH','route'=>['user_profile.education.update',$educ2->educ_id]]) !!}
                @include('partials.educ_form')


                <div class="col-lg-12">
                    <br/>
                    <div class="col-lg-8 col-lg-offset-4">
                        <div class="col-lg-4">
                            {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'update_educ')) !!}
                            {!!Form::close()!!}
                        </div>
                        <div class="col-lg-4">
                            {!!Form::button('Cancel', array('id' => 'cancel_educ', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::open(array('route' => array('user_profile.education.destroy', $educ2->educ_id), 'method' => 'delete')) !!}
                                <button type="submit" class="btn btn-link">Delete this item</button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>


        </div>
        @endif
    @endif
</div>
