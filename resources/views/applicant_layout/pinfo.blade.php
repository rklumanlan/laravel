<div>

    <div class="row" id="pinfo_view" style="background-color: #eff0f2;padding-top:30px; padding-bottom:30px; margin-bottom:10px">

        <div class="col-lg-12">
              <div class=' col-lg-3'>
                    <img src='{{ asset('/images/userpic/') }}/{{$user->pinfo['imgname']}}' class='img-responsive' />
              </div>
              <div class=' col-lg-9' >
                    <div class='form_title' @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" @endif id="edit_pinfo">
                        @if(Auth::user()->admin==0)
                        <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.personal_info.edit', $user->pinfo['user_id']) !!}@endif">
                        <span  class='pointer' id='pinfo' onClick='open_container(this.id)'>
                            <span>
                            {!!$user->pinfo['fname']!!} {!!$user->pinfo['mname']!!} {!!$user->pinfo['lname']!!}</span>
                            <span class="icon-edit invi edit_pinfo "></span>
                        </span>
                        </a>
                        @else
                        <span>
                            {!!$user->pinfo['fname']!!} {!!$user->pinfo['mname']!!} {!!$user->pinfo['lname']!!}
                        </span>

                        @endif
                    </div>
                    <div @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" @endif id="edit_pinfo" >
                        @if(Auth::user()->admin==0)
                        <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.personal_info.edit', $user->pinfo['user_id']) !!}@endif">
                        <span class='pointer' id='pinfo' onClick='open_container(this.id)' >
                            <span >
                            {!!$user->pinfo['address']!!}, {!!$user->pinfo['city']!!}</span> <span class="icon-edit invi edit_pinfo "></span>
                        </span>
                        </a>
                        @else
                        <span >
                            {!!$user->pinfo['address']!!}, {!!$user->pinfo['city']!!}
                        </span>
                        @endif
                    </div>
                    <div @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" @endif id="edit_pinfo">
                        @if(Auth::user()->admin==0)
                        <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.personal_info.edit', $user->pinfo['user_id']) !!}@endif">
                        <span  class='pointer' id='pinfo' onClick='open_container(this.id)'>
                            <span >
                            {!!$user->pinfo['sex']!!}</span>
                            <span class="icon-edit invi edit_pinfo "></span>
                        </span>
                        </a>
                        @else
                            <span >{!!$user->pinfo['sex']!!}</span>
                        @endif
                    </div>


                    <div @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" @endif id="edit_pinfo">
                        @if(Auth::user()->admin==0)
                        <a href="@if(Auth::user()->admin==0) {!! URL::route('user_profile.personal_info.edit', $user->pinfo['user_id']) !!}@endif">
                        <span class='pointer' id='pinfo' onClick='open_container(this.id)'>
                            <span >
                            {!!$user->pinfo['age']!!}</span>
                            <span class="icon-edit invi edit_pinfo "></span>
                        </span>
                        </a>
                        @else
                        <span >{!!$user->pinfo['age']!!}</span>
                        @endif
                    </div>
              </div>
        </div>
    </div>
    @if(Auth::user()->admin==0)
        @if($pinfo2 != NULL)
        <div class="panel panel-info" id="pinfo_edit" >
            <div class="panel-heading">
                <div class="panel-title">
                      Personal Information
                </div>
            </div>
            <div style="padding-top:30px" class="panel-body form-horizontal" >
                {!!
                Form::model($user->pinfo,['method'=>'PATCH','route'=>['user_profile.personal_info.update',$user->pinfo['user_id']]]) !!}
                @include('partials.pinfo_form')


                <div class="col-lg-12">
                    <br/>
                    <div class="col-lg-2 pull-right ">
                        {!!Form::button('Cancel', array('id' => 'cancel_pinfo', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                    </div>
                    <div class="col-lg-2 pull-right ">
                        {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block','name'=>'update_pinfo')) !!}
                    </div>

                </div>

                {!!Form::close()!!}
            </div>
        </div>
        @endif
    @endif
</div>
